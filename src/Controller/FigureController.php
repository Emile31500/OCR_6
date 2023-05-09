<?php

namespace App\Controller;

use App\Entity\Figure;
use DateTimeInterface;
use App\Entity\Message;
use App\Form\MessageType;
use App\Form\EditionFigureType;
use App\Form\CreationFigureType;
use App\Repository\FigureRepository;
use App\Repository\MessageRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;


class FigureController extends AbstractController
{

    #[Route('/figure/{slug}', name: 'app_figure')]
    public function liste(Request $request, EntityManagerInterface $manager, FigureRepository $figureRepository, TokenStorageInterface $tokenStorage, string $slug): Response
    {
        $message = new Message();
        $figure = $figureRepository->findOneBySlug($slug);

        $form = $this->createForm(MessageType::class, $message);
        $form->handleRequest($request);
        $user = $this->getUser();

        if ($form->isSubmitted() && $form->isValid() && isset($user)) {
            
            $message->setUtilisateur($user);
            $message->setDate(new \DateTime());
            $message->setMessage($form->get('message')->getData());    
            $message->setFigure($figure);

            $manager->persist($message);
            $manager->flush();

        }

        return $this->render('figure/index.html.twig', [
            'controller_name' => $figure->getNom(),
            'form' => $form->createView(),
            'figure' => $figure
        ]);
    }

    #[Route('/figure/liste/{max_result}', name: 'app_figure_liste')]
    public function print (int $max_result, AuthorizationCheckerInterface $authorizationChecker, FigureRepository $figureRepository) : Response
    {
        $figures = $figureRepository->findPublished($max_result);
        if($authorizationChecker->isGranted('ROLE_ADMIN')) {

            $isAdmin = true;

        } else {

            $isAdmin = false;

        }

        return $this->render('figure/list.html.twig', [
            'figures' => $figures,
            'isAdmin' => $isAdmin
        ]);

    }

    #[Route('/message/{slug}', name: 'app_message')]
    public function message(MessageRepository $messageRepo, FigureRepository $figureRepository, string $slug) : JsonResponse {

        $figure = $figureRepository->findOneBySlug($slug);
        $messages_obj = $messageRepo->findByFigure($figure->getId());
        $max = count($messages_obj);
        $message = [];

        for ($i=0; $i < $max; $i++) { 

            $temp["nom_utilisateur"] = $messages_obj[$i]->getUtilisateur()->getNomUtilisateur();
            $temp["message"] = $messages_obj[$i]->getMessage();
            $temp["date"] = $messages_obj[$i]->getDate();

            array_push($message, $temp);
            unset($temp);

        } 

        return new JsonResponse($message);
    }

    #[Route('/figure-suppression/{slug}', name: 'app_supression_figure')]
    public function suppressionFigure(FigureRepository $figureRepo, AuthorizationCheckerInterface $authorizationChecker, string $slug) : JsonResponse{

        if($authorizationChecker->isGranted("ROLE_ADMIN")){

            $figure = $figureRepo->findOneBySlug($slug);
            $figureRepo->remove($figure, true);
            
            return new JsonResponse(["status" => true]);

        }

        header('location: /');

    }
    
    #[Route('/edition-figure/{slug}', name: 'app_edition_figure')]
    public function editionFigure(SessionInterface $session, AuthorizationCheckerInterface $authorizationChecker, string $slug, Request $request, EntityManagerInterface $manager,  FigureRepository $figureRepo){
        
        if($authorizationChecker->isGranted("ROLE_ADMIN")){

            $session->start();
            if ($session->get('slug') !== null){
                
                $slug = $session->get('slug');

            }

            $oldFigure = $figureRepo->findOneBySlug($slug);
            $figure = $oldFigure;
            $form = $this->createForm(CreationFigureType::class, $figure);
            $form->handleRequest($request);
            
            if ($form->isSubmitted() && $form->isValid()) {
                
                $slug = str_replace(' ', '-', $form->get('nom')->getData());
                $slug = strtolower($slug);
                $figure = $form->getData();

                $imgPath = 'media/img/figures/'.$figure->getImageUrl();
                $imgDefault = new File($imgPath);

                if ($imageFile = $form->get('photo')->getData()) {

                    $newFilename  = uniqid().'.'.$imageFile->guessExtension();

                    try {
                        $imageFile->move(
                            $this->getParameter('figure_image_directory'),
                            $newFilename
                        );

                    } catch (FileException $e) {
                        // handle exception
                    }

                    $figure->setImageUrl($newFilename);
                }

                $session->set('slug', $slug);

                $figure->setSlug($slug);
                $figureRepo->save($figure, true);
           
            }
           
            
            return $this->render('figure/edition.html.twig', [
                'controller_name' => 'Edition d\'une figure',
                'form' => $form->createView(),
                'figure' => $oldFigure,

            ]);

        } else {

            header("location: /");


        }
    }
    
    #[Route('/creation-figure', name: 'app_creation_figure')]
    public function creationFigure(Request $request, EntityManagerInterface $manager, AuthorizationCheckerInterface $authorizationChecker)  : ?Response 
    {

        if($authorizationChecker->isGranted("ROLE_ADMIN")){

            $figure = new Figure();
            $figure->setNom('');
            $figure->setArticle('');

            $form = $this->createForm(CreationFigureType::class, $figure);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                
                $imageFile = $form->get('imageUrl')->getData();

                if ($imageFile) {

                    $newFilename  = uniqid().'.'.$imageFile->guessExtension();

                    try {
                        $imageFile->move(
                            $this->getParameter('figure_image_directory'),
                            $newFilename
                        );

                    } catch (FileException $e) {
                        // handle exception
                    }
                    
                    $slug = str_replace(' ', '-', $form->get('nom')->getData());
                    $slug = strtolower($slug);

                    $figure->setSlug($slug);
                    $figure->setImageUrl($newFilename);
                    
                    $figure = $form->getData();
                    
                    try {

                        $manager->persist($figure);
                        $manager->flush();

                        return $this->render('figure/creation.html.twig', [
                            'controller_name' => "Création d'une figure",   
                            'success' => "Figure enregistrée ",
                            'form' => $form
                        ]);

                    } catch (UniqueConstraintViolationException $e) {
                        
                        return $this->render('figure/creation.html.twig', [
                            'controller_name' => "Création d'une figure",
                            'error' => "Attention : il y a un duplicata sur un des champs ! ",
                            'form' => $form
                        ]);
                    }

                }
            }

            return $this->render('figure/creation.html.twig', [
                'controller_name' => "Création d'une figure",
                'form' => $form
            ]);

        } else {

            header("location: /");


        }
    }
}
