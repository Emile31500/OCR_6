<?php

namespace App\Controller;

use App\Repository\FigureRepository;
use App\Repository\PhotoFigureRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(FigureRepository $figureRepository, PhotoFigureRepository $photoFigureRepository): Response
    {
        $figures = $figureRepository->findPublished();

        $data = [];    

        foreach ($figures as $figure) {
            
            $temp["figure"] = $figure;
            $temp["photo"] =  $photoFigureRepository->findByFigureId($figure->getId());

            array_push($data, $temp);
            unset($temp);

        }

        return $this->render('home/index.html.twig', [
            'controller_name' => 'Home',
            'data' => $data
        ]);
    }
}
