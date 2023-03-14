<?php

namespace App\Controller;

use App\Repository\FigureRepository;
use App\Repository\PhotoFigureRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    // #[Route('/{max_res?}', name: 'app_home')]
    #[Route('/', name: 'app_home')]
    public function index(FigureRepository $figureRepository, PhotoFigureRepository $photoFigureRepository): Response
    {

        if (!isset($_GET["max_result"])){

            $max_res = 3;
            
        } else {

            $max_res = $_GET["max_result"];

        }

        $figures = $figureRepository->findPublished($max_res);

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
