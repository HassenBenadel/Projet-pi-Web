<?php

namespace App\Controller;

use App\Entity\Post;
use App\Entity\Commentaire;
use App\Form\CommentaireType;
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
     * @Route("/{id}", name="app_postFront_show", methods={"GET"})
     */
    public function show(Post $post, EntityManagerInterface $entityManager, int $id): Response
    {
        $commentaires = $entityManager
            ->getRepository(Commentaire::class)
            ->findBy(['idpost' => $id]);

        return $this->render('post/showFront.html.twig', [
            'post' => $post,
            'commentaires' => $commentaires,
        ]);
    }

    /**
     * @Route("/MesBlogs/{id}", name="app_postFront_MesBlogs", methods={"GET"})
     */
    public function indexMesBlogs(EntityManagerInterface $entityManager, int $id): Response
    {
        $posts = $entityManager
            ->getRepository(Post::class)
            ->findBy(['userid' => $id]);

        return $this->render('post/indexMesBlogs.html.twig', [
            'posts' => $posts,
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

        return $this->redirectToRoute('app_postFront_MesBlogs', array('id' => $idU), Response::HTTP_SEE_OTHER);
    }
}