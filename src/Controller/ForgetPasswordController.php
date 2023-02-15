<?php

namespace App\Controller;


use App\Entity\RecuperationMdp;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\MailerInterface;
use App\Repository\UtilisateurRepository;
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
    public function index(Request $request, UtilisateurRepository $UtilisateurRepository, RecuperationMdpRepository $recuperationMdpRepository, MailerInterface $mailer): Response
    {
        $form_send_recup_code = $this->createForm(SendPasswordRecuperationCodeType::class);
        $form_send_recup_code->handleRequest($request);

        if ($form_send_recup_code->isSubmitted() && $form_send_recup_code->isValid()) {
            
            $response = $form_send_recup_code->getData();
            $utilisateur = $UtilisateurRepository->findByEmail($response['email']);

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

                $email = (new Email())
                ->from('hello@example.com')
                ->to($response['email'])
                //->cc('cc@example.com')
                //->bcc('bcc@example.com')
                //->replyTo('fabien@example.com')
                //->priority(Email::PRIORITY_HIGH)
                ->subject('Email de récupération de mot de passe')
                ->text('Sending emails is fun again!')
                ->html('<h1> Email de récupération de mot de passe : </h1> <p> Code de récupération : '.$randomString.'</p>');
    
                $mailer->send($email);

            }

        }   

        return $this->render('forget_password/index.html.twig', [
            "form_send_recup_code" => $form_send_recup_code->createView(),
            'controller_name' => 'ForgetPasswordController',
        ]);
    }
}
