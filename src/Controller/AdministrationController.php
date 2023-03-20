<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdministrationController extends AbstractController
{
    #[Route('/administration', name: 'app_administration')]
    public function index(SessionInterface $session, Security $security): Response
    {

        if ($user = $security->getUser()) {

            $role = $user->getRoles();

            if ($role[0] != "administrator"){
                
                header('location: /');
                die;
            
            }

            return $this->render('administration/index.html.twig', [
                'controller_name' => 'Administration',
                'form' => $form->createView()
            ]);

        } 
    }
}
