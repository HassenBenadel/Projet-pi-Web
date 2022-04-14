<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BackIndexController extends AbstractController
{
    /**
     * @Route("/back/index", name="app_back_index")
     */
    public function index(): Response
    {
        return $this->render('Bbase.html.twig');
    }
}
