<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontIndexController extends AbstractController
{
    /**
     * @Route("/front/index", name="app_front_index")
     */
    public function index(): Response
    {
        return $this->render('base.html.twig');
    }
}
