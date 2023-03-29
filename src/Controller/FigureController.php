<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\FigureRepository;
use App\Repository\MessageRepository;
use App\Form\CreationFigureType;
use App\Form\EditionFigureType;
use App\Form\MessageType;
use Symfony\Component\HttpFoundation\File\File;
use App\Entity\Figure;
use App\Entity\Message;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use DateTimeInterface;


class FigureController extends AbstractController
{
    #[Route('/figure/{slug}', name: 'app_figure')]
    public function index(Request $request, EntityManagerInterface $manager, FigureRepository $figureRepository, TokenStorageInterface $tokenStorage, string $slug): Response
    {
        $message = new Message();
        $figure = $figureRepository->findOneBySlug($slug);

        $form = $this->createForm(MessageType::class, $message);
        $form->handleRequest($request);
        
        if ($tokenStorage->getToken()){

            $user = $tokenStorage->getToken()->getUser();

        }
        

        if ($form->isSubmitted() && $form->isValid()){

            $dateString = date('Y-m-d');
            $dateTime = \DateTimeImmutable::createFromFormat('Y-m-d', $dateString);

            $message->setUtilisateur($user);
            $message->setMessage($form->get('message')->getData());    
            $message->setDate($dateTime);
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
    public function liste (int $max_result, AuthorizationCheckerInterface $authorizationChecker, FigureRepository $figureRepository)
    {
        $figures = $figureRepository->findPublished($max_result);
        if($authorizationChecker->isGranted("administrator")) {

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
    public function message(MessageRepository $messageRepo, FigureRepository $figureRepository, string $slug){

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

        header("Content-Type: application/json");
        echo(json_encode($message));
        die;
    }

    #[Route('/figure-suppression/{slug}', name: 'app_supression_figure')]
    public function suppressionFigure(FigureRepository $figureRepo, TokenStorageInterface $tokenStorage, Security $security, string $slug){

        $user = $tokenStorage->getToken()->getUser();
        $isAdmin = $user->getRoles()[0] == "administrator";

        if($isAdmin){

            $figure = $figureRepo->findOneBySlug($slug);
            $figureRepo->remove($figure, true);

            header("Content-Type: applciation/json");
            echo json_encode(["status" => true]);
            die;

        }

        header('location: /');
        die;

    }

    #[Route('/edition-figure/{slug}', name: 'app_edition_figure')]
    public function editionFigure(SessionInterface $session, string $slug, Request $request, EntityManagerInterface $manager,  FigureRepository $figureRepo, TokenStorageInterface $tokenStorage, Security $security){
        
        $user = $tokenStorage->getToken()->getUser();
        $isAdmin = $user->getRoles()[0] === "administrator";

        if($isAdmin){

            $session->start();
            if ($session->get('slug') !== null){

                
                $slug = $session->get('slug');

            }

            $oldFigure = $figureRepo->findOneBySlug($slug);
            $figure = $oldFigure;
            $form = $this->createForm(CreationFigureType::class, [], [
                'data' => [
                    'isFormEdit' => true,
                    'nom' => $figure->getNom(),
                    'article' => $figure->getArticle()
                    ]
            ]);
            $form->handleRequest($request);
            
            if ($form->isSubmitted() && $form->isValid()) {
            
                $nom = $form->get('nom')->getData();
                $slug = str_replace(' ', '-', $nom);
                $slug = strtolower($slug);
                $article = $form->get('article')->getData();

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

                    // persist the new filename to the database or do whatever you want with it
                    $figure->setImageUrl($newFilename);
                }

                $session->set('slug', $slug);
                
                $figure->setNom($nom);
                $figure->setSlug($slug);
                $figure->setArticle($article);
                $figureRepo->save($figure, true);
           
            }
           
            
            return $this->render('figure/edition.html.twig', [
                'controller_name' => 'Edition d\'une figure',
                'form' => $form->createView(),
                'figure' => $oldFigure,

            ]);

        } else {

            header("location: /");
            die;

        }
    }

    #[Route('/creation-figure', name: 'app_creation_figure')]
    public function creationFigure(Request $request, EntityManagerInterface $manager, TokenStorageInterface $tokenStorage, Security $security){

        $user = $tokenStorage->getToken()->getUser();
        $isAdmin = $user->getRoles()[0] == "administrator";

        if($isAdmin){

            $figure = new Figure();
            $form = $this->createForm(CreationFigureType::class, [], ['data' => [
                                                                            'isFormEdit' => true,
                                                                            'nom' => '',
                                                                            'article' => ''
                                                                        ]]);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                
                $imageFile = $form->get('photo')->getData();

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

                    // persist the new filename to the database or do whatever you want with it
                    $nom = $form->get('nom')->getData();
                    $slug = str_replace(' ', '-', $nom);
                    $slug = strtolower($slug);
                    $article = $form->get('article')->getData();
        
                    $figure->setImageUrl($newFilename );
                    $figure->setNom($nom);
                    $figure->setSlug($slug);
                    $figure->setArticle($article);
        
                    $manager->persist($figure);
                    $manager->flush();

                }
            }

            return $this->render('figure/creation.html.twig', [
                'controller_name' => "Création d'une figure",
                "form" => $form->createView()
            ]);

        } else {

            header("location: /");
            die;

        }
    }
}
