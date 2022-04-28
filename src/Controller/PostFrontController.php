<?php

namespace App\Controller;

use App\Entity\CommentaireRating;
use App\Entity\Post;
use App\Entity\Commentaire;
use App\Form\CommentaireTypeFront;
use App\Form\PostType;
use App\Form\PostTypeEdit;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/postFront")
 */
class PostFrontController extends AbstractController
{
    /**
     * @Route("/", name="app_postFront_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $posts = $entityManager
            ->getRepository(Post::class)
            ->findAll();

        return $this->render('post/indexFront.html.twig', [
            'posts' => $posts,
        ]);
    }

    /**
     * @Route("/newFront/{idU}", name="app_postFront_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager, int $idU): Response
    {
        $post = new Post();
        $form = $this->createForm(PostType::class, $post);
        $dateT = new \DateTime("now");
        $post->setDatecreation($dateT);
        $post->setUserid($idU);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $post->getImage();
            $filename = md5(uniqid()) . '.' . $file->guessExtension();
            $file->move($this->getParameter('images_directory'), $filename);
            $post->setImage($filename);
            $entityManager->persist($post);
            $entityManager->flush();
            $this->addFlash(
                'info',
                'Ajout avec Succées !'
            );

            return $this->redirectToRoute('app_postFront_MesBlogs', array('idU' => $idU), Response::HTTP_SEE_OTHER);
        }

        return $this->render('post/newFront.html.twig', [
            'post' => $post,
            'form' => $form->createView(),
            'idU' => $idU,
        ]);
    }

    /**
     * @Route("/{id}/edit/{idU}", name="app_postFront_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Post $post, EntityManagerInterface $entityManager, int $idU, int $id): Response
    {
        $form = $this->createForm(PostTypeEdit::class, $post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $post->getImage();
            $filename = md5(uniqid()) . '.' . $file->guessExtension();
            $file->move($this->getParameter('images_directory'), $filename);
            $post->setImage($filename);
            $entityManager->flush();

            return $this->redirectToRoute('app_postFront_MesBlogs', array('idU' => $idU), Response::HTTP_SEE_OTHER);
        }

        return $this->render('post/editFront.html.twig', [
            'post' => $post,
            'form' => $form->createView(),
            'id' => $id,
            'idU' => $idU,
        ]);
    }

    /**
     * @Route("/show/{id}/{idU}", name="app_postFront_show", methods={"GET", "POST"})
     */
    public function show(Post $post, EntityManagerInterface $entityManager, int $id, int $idU, Request $request): Response
    {
        $commratings = $entityManager
            ->getRepository(CommentaireRating::class)
            ->findAll();

        $commentaires = $entityManager
            ->getRepository(Commentaire::class)
            ->findBy(['idpost' => $id]);

        $commentaire = new Commentaire();
        $form = $this->createForm(CommentaireTypeFront::class, $commentaire);
        $commentaire->setUserid($idU);
        $commentaire->setCommentateur('omar');
        $commentaire->setIdpost($post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($commentaire);
            $entityManager->flush();

            return $this->redirectToRoute('app_postFront_show', array('id' => $id, 'idU' => $idU), Response::HTTP_SEE_OTHER);
        }

        return $this->render('post/showFront.html.twig', [
            'post' => $post,
            'commentaires' => $commentaires,
            'commentaire' => $commentaire,
            'commratings' => $commratings,
            'idU' => $idU,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/MesBlogs/{idU}", name="app_postFront_MesBlogs", methods={"GET"})
     */
    public function indexMesBlogs(EntityManagerInterface $entityManager, int $idU): Response
    {
        $posts = $entityManager
            ->getRepository(Post::class)
            ->findBy(['userid' => $idU]);

        return $this->render('post/indexMesBlogs.html.twig', [
            'posts' => $posts,
            'idU' => $idU,
        ]);
    }

    /**
     * @Route("/{id}/{idU}", name="app_postFront_delete", methods={"POST"})
     */
    public function delete(Request $request, Post $post, EntityManagerInterface $entityManager, int $idU): Response
    {
        if ($this->isCsrfTokenValid('delete'.$post->getId(), $request->request->get('_token'))) {
            $entityManager->remove($post);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_postFront_MesBlogs', array('idU' => $idU), Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("/{id}/{idU}/{idC}", name="app_comm_like", methods={"GET", "POST"})
     */
    public function like(Request $request, EntityManagerInterface $entityManager,int $id, int $idU, int $idC): Response
    {
        $commentaire = $entityManager
            ->getRepository(Commentaire::class)
            ->findOneBy(['id' => $idC]);

        $commrating = $entityManager
            ->getRepository(CommentaireRating::class)
            ->findOneBy(['idcommentaire' => $idC, 'iduser' => $idU]);

        if(empty($commrating)){
            $commratinge = new CommentaireRating();
            $commratinge->setIduser($idU);
            $commratinge->setIdcommentaire($commentaire);
            $entityManager->persist($commratinge);
            $entityManager->flush();
        } else {
            $entityManager->remove($commrating);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_postFront_show', array('id' => $id, 'idU' => $idU), Response::HTTP_SEE_OTHER);
    }
}