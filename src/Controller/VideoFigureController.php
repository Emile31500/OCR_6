<?php

namespace App\Controller;

use App\Repository\FigureRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\VideoFigureRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class VideoFigureController extends AbstractController
{
    #[Route('/figure/videos/{slug}', name: 'app_get_video_figure', methods: ['GET'])]
    public function get(string $slug, VideoFigureRepository $videoFigureRepository, FigureRepository $figureRepository, SerializerInterface $serializer): JsonResponse
    {
        $figure = $figureRepository->findBySlug($slug);
        
        if ($figure) {

            $videos = $figure->getVideoFigures();

            if ($videoFigureRepository) {

                $jsonVideos = $serializer->serialize($videos, 'json', ['groups' => 'figure']);
                return new JsonResponse($jsonVideos, Response::HTTP_OK, [], true);
            
            }
            
        }

        return new JsonResponse(null, Response::HTTP_NOT_FOUND);
    }

    
    #[Route('/figure/video/supprimer/{id}', name: 'app_delete_video_figure', methods: ['DELETE'])]
    public function delete(int $id, VideoFigureRepository $videoFigureRepository, SerializerInterface $serializer, EntityManagerInterface $manager): JsonResponse
    {
        $videoFigure = $videoFigureRepository->findById($id);
        
        if ($videoFigure) {

            $manager->remove($videoFigure);
            $manager->flush();
        
        } else {

            throw new HttpException(JsonResponse::HTTP_BAD_REQUEST, "Requête invalide");

        }
        
        return new JsonResponse(null, Response::HTTP_NO_CONTENT);

    }
}
