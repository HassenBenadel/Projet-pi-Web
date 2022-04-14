<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Form\SignUpType;
use App\Form\ConnectType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class UtilisateurController extends AbstractController
{
    /**
     * @Route("/Connect", name="ConnectForm")
     */
    public function connectform(Request $request): Response
    {
        $session  = $request->getSession();


        $rep = $this->getDoctrine()->getRepository(Utilisateur::class);
        $form = $this->createForm(ConnectType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $emailInput = $form["email"]->getData();
            $passwordInput = $form["password"]->getData();

            $user = $rep->findBy(['email' => $emailInput, 'password' => $passwordInput]);

            if ($user) {

                $session->set('user', $user);
                //return $this->redirectToRoute('UsersList');
                return $this->render('utilisateur/home.html.twig');
            } else {
                return $this->render('Form/connectForm.html.twig', [
                    'user' => $user,
                    'form' => $form->createView()
                ]);
            }
        }
        return $this->render('Form/connectForm.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/Profile", name="Profile")
     */
    public function profile():Response
    {
        return $this->render('utilisateur/profile.html.twig');
    }

    /**
     * @Route("/SignUp", name="SignUp", methods={"GET", "POST"})
     */
    public function signUp(Request $request, EntityManagerInterface $entityManager): Response
    {
        $utilisateur = new Utilisateur();
        $form = $this->createForm(SignUpType::class, $utilisateur);
        $form->handleRequest($request);
        $utilisateur->setAdmin(0);
        $utilisateur->setBan(0);
        $utilisateur->setBanexpiration(null);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($utilisateur);
            $entityManager->flush();

            return $this->redirectToRoute('UsersList', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('Form/SignUpForm.html.twig', [
            'utilisateur' => $utilisateur,
            'form' => $form->createView(),
        ]);
    }

    /* public function banUser($idUser, EntityManagerInterface $entityManager): Response
    {
        $user = $entityManager->getRepository(Utilisateur::class)->find($idUser);
        $user->setBan(1)
    }*/
    /**
     * @Route("/list", name="UsersList", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $utilisateurs = $entityManager
            ->getRepository(Utilisateur::class)
            ->findAll();

        return $this->render('utilisateur/index.html.twig', [
            'utilisateurs' => $utilisateurs,
        ]);
    }

    /**
     * @Route("/User{idUser}", name="UserDescription", methods={"GET"})
     */
    public function userDetails(Utilisateur $utilisateur): Response
    {
        return $this->render('utilisateur/show.html.twig', [
            'utilisateur' => $utilisateur,
        ]);
    }

    /**
     * @Route("/{idUser}/edit", name="app_utilisateur_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Utilisateur $utilisateur, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(SignUpType::class, $utilisateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('UsersList', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('utilisateur/edit.html.twig', [
            'utilisateur' => $utilisateur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("DeleteUser{idUser}", name="DeleteUser", methods={"POST"})
     */
    public function delete(Request $request, Utilisateur $utilisateur, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $utilisateur->getIdUser(), $request->request->get('_token'))) {
            $entityManager->remove($utilisateur);
            $entityManager->flush();
        }

        return $this->redirectToRoute('UsersList', [], Response::HTTP_SEE_OTHER);
    }
}
