<?php

namespace App\Controller;
use App\Form\EntityType;
use App\Entity\Depot;
use App\Form\DepotType;
use App\Repository\DepotRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DepotController extends AbstractController
{
    /**
     * @Route("/depot", name="app_depot")
     */
    public function index(): Response
    {
        return $this->render('depot/index.html.twig', [
            'controller_name' => 'DepotController',
        ]);
    }
        /**
     * @Route("/adddepot", name="adddepot")
     */
    public function ajouterdepot(Request $request)
    {

        $depot= new Depot();
        $form = $this->createForm(DepotType::class, $depot);
        $form->add('Ajouter', SubmitType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() and $form->isValid()) {
          
            $em = $this->getDoctrine()->getManager();
        
            $em->persist($depot);
            $em->flush();

            $this->addFlash(
                'info',
                'Ajout avec succées !'
            );

            return $this->redirectToRoute('afficherdepot');
        
        }
        return $this->render('depot/ajouterdepot.html.twig', [
            'depot' => $form->createView(),
        ]);
    }
 
 /**
     * @Route("/affichdepot", name="afficherdepot")
     */
    public function afficherdepot(Request $request): Response
    {
        $r = $this->getDoctrine()->getRepository(Depot::class);
        $depot = $r->findAll();


        return $this->render('depot/afficherdepot.html.twig', array('depots' => $depot));

    }
    /**
     * @Route("/supprimerdepot{id}", name="deldep")
     */
    public function supprimerdepot($id)
    {
        $em = $this->getDoctrine()->getManager();
        $depot = $this->getDoctrine()->getRepository(Depot::class)->find($id);
        $em->remove($depot);
        $em->flush();

        $this->addFlash(
            'info',
            'Suppression avec succées !'
        );
     
        return $this->redirectToRoute('afficherdepot');
    }
       /**
     * @Route("/modifierdepot{id}", name="moddep")
     */
    public function modifierdepot(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $depot = $em->getRepository(Depot::class)->find($id);
        $form = $this->createForm(DepotType::class, $depot);
        $form->add('Modifier', SubmitType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($depot);
            $em->flush();
         
            $this->addFlash(
                'info',
                'modification avec succées !'
            );

            return $this->redirectToRoute('afficherdepot');
        }
        return $this->render('depot/updatedepot.html.twig', [
            'depot' => $form->createView(),
        ]);
    }

    /**
     * @Route("/depd/{id}", name="depdd")
     */
    public function show(Request $request,$id)
    {
       
        $e = $this->getDoctrine()->getRepository(Depot::class);
        $depot = $e->find($id);
        return $this->render('depot/detail.html.twig', [
            'depot' => 'depot'
        ]);
    }
}
