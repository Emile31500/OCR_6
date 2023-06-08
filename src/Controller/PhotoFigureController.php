<?php

namespace App\Controller;

use App\Repository\FigureRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\PhotoFigureRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PhotoFigureController extends AbstractController
{
    #[Route('/figure/photo/supprimer/{id}', name: 'app_delete_photo_figure', methods: ['DELETE'])]
    public function delete(int $id, PhotoFigureRepository $photoFigureRepository, SerializerInterface $serializer, EntityManagerInterface $manager): JsonResponse
    {
        $photoFigure = $photoFigureRepository->findById($id);
        
        if ($photoFigure) {

            $manager->remove($photoFigure);
            $manager->flush();
        
        } else {

            throw new HttpException(JsonResponse::HTTP_BAD_REQUEST, "Requête invalide");

        }
        
        return new JsonResponse(null, Response::HTTP_NO_CONTENT);

    }
}
