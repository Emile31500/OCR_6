<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\FigureRepository;
use App\Repository\VideoFigureRepository;
use App\Repository\PhotoFigureRepository;

class FigureController extends AbstractController
{
    #[Route('/figure/{slug}', name: 'app_figure')]
    public function index(FigureRepository $figureRepository, PhotoFigureRepository $photoFigureRepository, VideoFigureRepository $videoFigureRepository, string $slug): Response
    {

        $figure = $figureRepository->findOneBySlug($slug);

        $data = [];    

        $data["figure"] = $figure;
        $data["photo"] =  $photoFigureRepository->findByFigureId($figure->getId());
        $data["video"] =  $videoFigureRepository->findByFigureId($figure->getId());

        return $this->render('figure/index.html.twig', [
            'controller_name' => $figure->getNom(),
            'data' => $data
        ]);
    }

    #[Route('/creation-figure', name: 'app_creation_figure')]
    public function creationFigure(){

        return $this->render('figure/index.html.twig', [
            'controller_name' => "Création d'une figure"
        ]);

    }
}
