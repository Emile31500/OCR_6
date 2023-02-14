<?php

namespace App\Controller;


use App\Entity\RecuperationMdp;
use App\Repository\UtilisateursRepository;
use App\Repository\RecuperationMdpRepository;
use App\Form\SendPasswordRecuperationCodeType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use DateTime;


class ForgetPasswordController extends AbstractController
{
    #[Route('/recuperation-mot-de-passe', name: 'app_forget_password')]
    public function index(Request $request, UtilisateursRepository $utilisateursRepository, RecuperationMdpRepository $recuperationMdpRepository): Response
    {
        $form_send_recup_code = $this->createForm(SendPasswordRecuperationCodeType::class);
        $form_send_recup_code->handleRequest($request);

        if ($form_send_recup_code->isSubmitted() && $form_send_recup_code->isValid()) {
            
            $response = $form_send_recup_code->getData();
            $utilisateur = $utilisateursRepository->findByEmail($response['email']);

            if (isset($utilisateur) && !empty($utilisateur)){

                date("Y-m-d h:i:s");
                $now = new \DateTime();
                $date_limit = $now->modify('+5 minutes');
                
                $randomString = '';
                for ($i = 0; $i < 10; $i++) {
                    $randomString .= mt_rand(0, 9);
                }

                $recuperationMdp = new RecuperationMdp();
                $recuperationMdp->setEmail($response['email']);
                $recuperationMdp->setCodeDeRecup($randomString);
                $recuperationMdp->setDateLimite($date_limit);

                $recuperationMdpRepository->save($recuperationMdp);

            }

        }   

        return $this->render('forget_password/index.html.twig', [
            "form_send_recup_code" => $form_send_recup_code->createView(),
            'controller_name' => 'ForgetPasswordController',
        ]);
    }
}
