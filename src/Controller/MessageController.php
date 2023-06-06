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

    #[Route('/message/{slug}', name: 'app_message', methods: ['POST'])]
    public function message(MessageRepository $messageRepo, FigureRepository $figureRepository, Request $request, string $slug) : JsonResponse {
        
        $max = $request->toArray()['max_result'];

        $figure = $figureRepository->findBySlug($slug);
        $messages_obj = $messageRepo->findByFigure($figure->getId(), $max);
        $nbMessage = count($messages_obj);
        $message = [];

        for ($i=0; $i < $nbMessage; $i++) { 

            $temp["nom_utilisateur"] = $messages_obj[$i]->getUtilisateur()->getNomUtilisateur();
            $temp["message"] = $messages_obj[$i]->getMessage();
            $temp["date"] = $messages_obj[$i]->getDate();

            array_push($message, $temp);
            unset($temp);

        }

        return new JsonResponse($message);
    }

}
