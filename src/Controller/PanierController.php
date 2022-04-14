<?php

namespace App\Controller;

use App\Entity\Panier;
use App\Controller\LignecController;
use App\Form\PanierType;
use App\Repository\PanierRepository;
use App\Repository\LignecRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/panier")
 */
class PanierController extends AbstractController
{
    /**
     * @Route("/", name="app_panier_index", methods={"GET"})
     */
    public function index(PanierRepository $panierRepository): Response
    {
        return $this->render('panier/index.html.twig', [
            'paniers' => $panierRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_panier_new", methods={"GET", "POST"})
     */

    public function new(Request $request,int $idclient,string $id_panier,PanierRepository $panierRepository,LignecRepository $repo) : void
    {
    $panier = new Panier();
    $total=$this->calculerPanier($panier->getId_panier(),$repo,$request);
$panier->setIdClient($idclient);
$panier->setTotalpanier($total);
$panierRepository->add($panier);
        echo 'Envoyé';
}

public function calcultotal(string $idpanier,LignecRepository $repo,Request $req) :float
{ 
   $ligne=new LignecController();
$total =0;
    
            $total+=$ligne->prix( $repo,$req,$idpanier);
         return $total;  
}
    /**
     * @Route("/{id_panier}", name="app_panier_show", methods={"GET"})
     */
    public function show(Panier $panier): Response
    {
        return $this->render('panier/show.html.twig', [
            'panier' => $panier,
        ]);
    }

    /**
     * @Route("/{id_panier}/edit", name="app_panier_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Panier $panier, PanierRepository $panierRepository): Response
    {
        $form = $this->createForm(PanierType::class, $panier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $panierRepository->add($panier);
            return $this->redirectToRoute('app_panier_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('panier/edit.html.twig', [
            'panier' => $panier,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id_panier}", name="app_panier_delete", methods={"POST"})
     */
    public function delete(Request $request, Panier $panier, PanierRepository $panierRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$panier->getId_panier(), $request->request->get('_token'))) {
            $panierRepository->remove($panier);
        }

        return $this->redirectToRoute('app_panier_index', [], Response::HTTP_SEE_OTHER);
    }
    public function chercherpanierbyuser(PanierRepository $repo,Request $req,int $idclient)
    {
    
    
        $panier=$repo->findOneBy(['id_client'=>$idclient]); 
        return $panier;
        }
        public function miseajour(string $idpanier,LignecRepository $repo,Request $req,PanierRepository $rep,int $idclient): void
        {

            $total=$this->calcultotal($idpanier,$repo,$req);
            $panier=new Panier();
            $panier=$rep->findOneByiduser($idclient);
            $panier->setTotalpanier($total);
            $rep->add($panier);
        }
        public function vider(Request $request,int $id_client,PanierRepository $panierRepository)
        {

           $panierRepository->vider($id_client);
        }
}
