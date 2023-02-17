<?php

namespace App\Controller;

use App\Form\EditPsswFormType;
use App\Entity\Utilisateur;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
// use Symfony\Component\Mime\Email;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use App\Repository\UtilisateurRepository;
use App\Form\SendPasswordRecuperationCodeType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use DateTime;

class ForgetPasswordController extends AbstractController
{
    #[Route('/recuperation-mot-de-passe', name: 'app_forget_password')]
    public function index(Request $request, UtilisateurRepository $UtilisateurRepository, MailerInterface $mailer): Response
    {
        $form_send_recup_code = $this->createForm(SendPasswordRecuperationCodeType::class);
        $form_send_recup_code->handleRequest($request);

        if ($form_send_recup_code->isSubmitted() && $form_send_recup_code->isValid()) {
            
            $response = $form_send_recup_code->getData();
            $res = $UtilisateurRepository->findByEmail($response['email']);
            $utilisateur = $res[0];

            if (isset($utilisateur) && !empty($utilisateur)){

                date("Y-m-d h:i:s");
                $now = new \DateTime();
                $date_limit = $now->modify('+1 day');
                
                function generateRandomString($length = 64) {
                    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                    $randomString = '';
                    for ($i = 0; $i < $length; $i++) {
                        $randomString .= $characters[rand(0, strlen($characters) - 1)];
                    }
                    return $randomString;
                }

                $codeRecup = generateRandomString();
                
                $utilisateur->setCodeRecup($codeRecup);
                $utilisateur->setRecupDate($date_limit);
                $UtilisateurRepository->save($utilisateur, true);

                $email = (new TemplatedEmail())
                    ->from(new Address('emile00013@gmail.com'))
                    ->to(new Address($response['email']))    
                    ->subject('Email de récupération de mot de passe')
                    ->htmlTemplate('mail/password_recup.html.twig')
                    ->context([
                            'name' => $utilisateur->getNomUtilisateur(),
                            'code_recuperation' => $codeRecup
                    ]);
                $mailer->send($email);

            }

        }   

        return $this->render('forget_password/index.html.twig', [
            "form_send_recup_code" => $form_send_recup_code->createView(),
            'controller_name' => 'ForgetPasswordController',
        ]);
    }

    #[Route('/modifier-le-mot-de-passe/{code_recup}', name: 'app_edit_password')]
    public function editPassword(Request $request, UtilisateurRepository $UtilisateurRepository,  ) : response
    {

        $form = $this->createForm(EditPsswFormType::class);
        $form->handleRequest($request);

        return $this->render('forget_password/editpw.html.twig', [
            'controller_name' => 'Modification du mot de passe',
            'edit_pssw_form' => $form->createView()
        ]);
    }
}
