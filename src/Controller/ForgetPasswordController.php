<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Form\ChangePasswordType;
use App\Form\CodeType;
use App\Form\ForgetPasswordType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ForgetPasswordController extends AbstractController
{
    /**
     * @Route("/ForgetPassword", name="ForgetPassword" , methods={"GET", "POST"})
     */
    public function ForgetPassword(Request $request, \Swift_Mailer $mailer, EntityManagerInterface $entityManager): Response
    {

        $form = $this->createForm(ForgetPasswordType::class);
        $form->handleRequest($request);



        if ($form->isSubmitted() && $form->isValid()) {
            $rep = $this->getDoctrine()->getRepository(Utilisateur::class);
            $mail = $form["email"]->getData();
            $user = $rep->findBy(['email' => $mail]);
            if ($user) {
                //generating random code
                $code = random_int(1000, 9999);
                $user[0]->setCode($code);
                $entityManager->flush();

                $message = (new \Swift_Message('Code'))
                    ->setFrom("APPDEV@gmail.com")
                    ->setTo($mail)
                    ->setBody($code);

                $mailer->send($message);

                return $this->redirectToRoute('Code', ['email' => $mail]);
            } else {
                dump("empty");
            }
        }

        return $this->render('Form/EmailForgetPassword.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/Code:{email}", name="Code", methods={"GET", "POST"})
     */
    public function Code($email, Request $request): Response
    {
        $formCode = $this->createForm(CodeType::class);
        $formCode->handleRequest($request);

        if ($formCode->isSubmitted() && $formCode->isValid()) {
            $inputcode = $formCode["code"]->getData();
            $rep = $this->getDoctrine()->getRepository(Utilisateur::class);
            $user = $rep->findBy(['email' => $email]);
            $usercode = $user[0]->getCode();

            if ($inputcode == $usercode) {
                return $this->redirectToRoute('ChangePassword', ['email' => $email]);
            }
        }


        return $this->render('Form/Code.html.twig', [
            'form' => $formCode->createView()
        ]);
    }


    /**
     * @Route("/ChangePassword:{email}", name="ChangePassword" , methods={"GET", "POST"})
     */
    public function ChangePassword($email, Request $request, EntityManagerInterface $entityManager): Response

    {
        $formChange = $this->createForm(ChangePasswordType::class);
        $formChange->handleRequest($request);

        if ($formChange->isSubmitted() && $formChange->isValid()) {
            $inputpassword = $formChange["password"]->getData();
            $inputconfirmpassword = $formChange["confirm"]->getData();
            if ($inputpassword == $inputconfirmpassword) {
                $rep = $this->getDoctrine()->getRepository(Utilisateur::class);
                $user = $rep->findBy(['email' => $email]);
                $user[0]->setPassword($inputpassword);
                $entityManager->flush();
                dump(true);

            } else {
                dump(false);
            }

        }


        return $this->render('Form/ChangePassword.html.twig', [
            'form' => $formChange->createView()
        ]);
    }
}
