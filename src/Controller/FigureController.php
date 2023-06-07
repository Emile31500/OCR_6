<?php

namespace App\Controller;

use App\Entity\Figure;
use App\Entity\Message;
use App\Form\MessageType;
use App\Entity\PhotoFigure;
use App\Entity\VideoFigure;
use App\Form\EditionFigureType;
use App\Form\CreationFigureType;
use App\Service\PhotoFigureService;
use App\Repository\FigureRepository;
use App\Repository\MessageRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\PhotoFigureRepository;
use App\Repository\VideoFigureRepository;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Common\Collections\ArrayCollection;
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
        $figure = $figureRepository->findBySlug($slug);

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

    #[Route('/figure/liste/{max_result}', name: 'app_figure_liste', methods:['GET'])]
    public function print (int $max_result, AuthorizationCheckerInterface $authorizationChecker, FigureRepository $figureRepository, PhotoFigureRepository $photoFigureRepository) : Response
    {
        $figures = $figureRepository->findPublished($max_result);
        
        if($authorizationChecker->isGranted('ROLE_ADMIN')) {

            $isAdmin = true;

        } else {

            $isAdmin = false;

        }

        return $this->render('figure/list.html.twig', [
            "figures" => $figures,
            'isAdmin' => $isAdmin
        ]);

    }

    #[Route('/figure-suppression/{slug}', name: 'app_supression_figure', methods:['DELETE'])]
    public function suppressionFigure(MessageRepository $messageRepository, PhotoFigureRepository $photoFigureRepo, VideoFigureRepository $videoFigureRepo, FigureRepository $figureRepo, AuthorizationCheckerInterface $authorizationChecker, PhotoFigureService $phtFigServ, string $slug) : JsonResponse{

        if($authorizationChecker->isGranted('ROLE_ADMIN')){

            $figure = $figureRepo->findBySlug($slug);
            $photos = $photoFigureRepo->findByFigure($figure->getId());
            $videos = $videoFigureRepo->findByFigure($figure->getId());
            $messages = $messageRepository->findByFigure($figure->getId());
            
            if($coverImageFile = $figure->getCoverImageUrl()){
                $phtFigServ->delete($coverImageFile);
            }

            foreach ($photos as $photo)
            {
                $file = $photo->getImageUrl();
                $phtFigServ->delete($file);
                $photoFigureRepo->remove($photo, true);
            }

            foreach ($videos as $video)
            {
                $videoFigureRepo->remove($video, true);
            }
            
            foreach ($messages as $message)
            {
                $messageRepository->remove($message, true);
            }

            $figureRepo->remove($figure, true);
            
            return new JsonResponse(["status" => true]);

        } else {

             return new JsonResponse(["status" => false]);

        }
    
    }
    
    #[Route('/edition-figure/{slug}', name: 'app_edition_figure')]
    public function editionFigure(SessionInterface $session, AuthorizationCheckerInterface $authorizationChecker, string $slug, Request $request, EntityManagerInterface $manager,  FigureRepository $figureRepo, PhotoFigureService $phtFigServ) : Response
    {
        
        if($authorizationChecker->isGranted("ROLE_ADMIN")){

            $session->start();

            $oldFigure = $figureRepo->findBySlug($slug);
            $oldVideos = new ArrayCollection();

            foreach ($oldFigure->getVideoFigures() as $video) {
                
                $oldVideos->add($video);
            }

            $figure = $oldFigure;
            $form = $this->createForm(CreationFigureType::class, $figure);
            $form->handleRequest($request);
            
            if ($form->isSubmitted() && $form->isValid()) {
                
                $figure = $form->getData();
                $videos = $form->get('videoFigures');
                $figure->setEditedDate(new \DateTime());
                
                foreach ($oldVideos as $video) {

                    if (false === $figure->getVideoFigures()->contains($video)) {
                        
                        $video->getFigures()->removeElement($figure);
                        $entityManager->persist($video);
                        $entityManager->remove($video);
                    }
                }
 
                if ($images = $form['image']->getData()) {

                    foreach($images as $image){

                        $imgUrl = $phtFigServ->add($image, 300, 300);
                        $pht = new PhotoFigure();
                        $pht->setImageUrl($imgUrl);
                        $figure->addPhotoFigure($pht);
                        $manager->persist($pht);
    
                    }

                }
                
                foreach($videos as $video){

                    $vd = new VideoFigure();
                    $vd->setUrlVideo($video['urlVideo']->getData());
                    $figure->addVideoFigure($vd);
                    $manager->persist($vd);

                }

                if ($coverImage = $form['coverImage']->getData()) {

                    $imgUrl = $phtFigServ->add($coverImage, 1280, 720);
                    $figure->setCoverImageUrl($imgUrl);
                    
                }
                
                $slug = str_replace(' ', '-', $form->get('nom')->getData());
                $slug = strtolower($slug);
                $session->set('slug', $slug);
                $figure->setSlug($slug);

                $manager->persist($figure);
                $manager->flush();

                try {

                    return $this->render('figure/edition.html.twig', [
                        'controller_name' => 'Edition d\'une figure',
                        'form' => $form->createView(),
                        'success' => 'Figure enregistré',
                        'figure' => $oldFigure,
        
                    ]);
    
                } catch(UniqueConstraintViolationException $e) {
    
                    return $this->render('figure/edition.html.twig', [
                        'controller_name' => 'Edition d\'une figure',
                        'form' => $form->createView(),
                        'error' => 'Attention : il y a un duplicata sur un des champs ! ',
                        'figure' => $oldFigure,
        
                    ]);
    
                }

            }

            return $this->render('figure/edition.html.twig', [
                'controller_name' => 'Edition d\'une figure',
                'form' => $form->createView(),
                'figure' => $oldFigure,

            ]);
        
        } else {

            return $this->render('home/index.html.twig', [
                'controller_name' => 'Home',
                'isAdmin' => false
            ]);

        }
    }
    
    #[Route('/creation-figure', name: 'app_creation_figure')]
    public function creationFigure(Request $request, EntityManagerInterface $manager, AuthorizationCheckerInterface $authorizationChecker, PhotoFigureService $phtFigServ)  : Response 
    {

        if($authorizationChecker->isGranted("ROLE_ADMIN")){


            $form = $this->createForm(CreationFigureType::class);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                
                $figure = $form->getData();
                $figure->setCreatedDate(new \DateTime());
                $figure->setEditedDate(new \DateTime());
                $images = $form['image']->getData();
                $coverImage = $form['coverImage']->getData();
                $videos = $form->get('videoFigures');

                foreach($images as $image){

                    $imgUrl = $phtFigServ->add($image, 300, 300);
                    $pht = new PhotoFigure();
                    $pht->setImageUrl($imgUrl);
                    $figure->addPhotoFigure($pht);
                    $manager->persist($pht);

                }

                foreach($videos as $video){

                    $vd = new VideoFigure();
                    $vd->setUrlVideo($video['urlVideo']->getData());
                    $figure->addVideoFigure($vd);
                    $manager->persist($vd);

                }

                $imgUrl = $phtFigServ->add($coverImage, 1280, 720);
                $figure->setCoverImageUrl($imgUrl);

                $slug = str_replace(' ', '-', $form->get('nom')->getData());
                $slug = strtolower($slug);
                $figure->setSlug($slug);
                
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

            return $this->render('figure/creation.html.twig', [
                'controller_name' => "Création d'une figure",
                'form' => $form
            ]);

        } else {

            return $this->render('home/index.html.twig', [
                'controller_name' => 'Home',
                'isAdmin' => false
            ]);
            
        }
    }
}
