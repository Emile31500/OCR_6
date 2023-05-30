<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home', methods:['GET'])]
    public function index(AuthorizationCheckerInterface $authorizationChecker): Response
    {

        $isAdmin = $authorizationChecker->isGranted('ROLE_ADMIN');

        return $this->render('home/index.html.twig', [
            'controller_name' => 'Accueil',
            'isAdmin' => $isAdmin
        ]);
    }
}
