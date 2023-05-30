<?php

namespace App\Controller;

use App\Entity\Message;
use App\Repository\FigureRepository;
use App\Repository\MessageRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class MessageController extends AbstractController{

    #[Route('/message/{slug}', name: 'app_message', methods: ['GET'])]
    public function message(MessageRepository $messageRepo, FigureRepository $figureRepository, string $slug) : JsonResponse {

        $figure = $figureRepository->findBySlug($slug);
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

}
