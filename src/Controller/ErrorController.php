<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ErrorController extends AbstractController
{
    /**
    * @Route("/404", name="app_404", methods="GET")
    */
    public function error404(): Response
    {
        return $this->render('error/index.html.twig', [
            'controller_name' => 'Errreur',
            'code' => 404,
            'message' => 'la page demandé n\'a pas été trouvé.'
        ]);
    }
}
