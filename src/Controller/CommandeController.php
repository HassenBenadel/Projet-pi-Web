<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Form\CommandeType;
use App\Repository\CommandeRepository;
use App\Repository\CarteFideliteRepository;
use App\Repository\PanierRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/commande")
 */
class CommandeController extends AbstractController
{
    /**
     * @Route("/", name="app_commande_index", methods={"GET"})
     */
    public function index(CommandeRepository $commandeRepository): Response
    {
        return $this->render('commande/index.html.twig', [
            'commandes' => $commandeRepository->findAll(),
        ]);
    }

        /**
     * @Route("/historique", name="app_commande_historique", methods={"GET"})
     */
    public function historique(CommandeRepository $commandeRepository): Response
    {
        return $this->render('commande/historique.html.twig', [
            'commandes' => $commandeRepository->findById(9),
        ]);
    }
    /**
     * @Route("/new", name="app_commande_new", methods={"GET", "POST"})
     */
    public function new(Request $request,PanierRepository $rep,CarteFideliteRepository $repo,CommandeRepository $commandeRepository): Response
    {
        $commande = new Commande();
        $form = $this->createForm(CommandeType::class, $commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $commande->setDateCommande(new \DateTime('now'));
            $prix=$this->calculpanier(9,$rep,$request);
            $commande->setTotalprix($prix);
            $commande->setTotalpanier($prix);
            $commandeRepository->add($commande);
            $gain = (int) ($prix * 20 / 100);

            $crt = new CarteFideliteController();
            $crt->Pointparcommande($request,$repo,$gain,6);
            return $this->render('commande/new.html.twig', [
                'commande' => $commande,
                'form' => $form->createView(),
            ]);
        }

        return $this->render('commande/new.html.twig', [
            'commande' => $commande,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id_commande}", name="app_commande_show", methods={"GET"})
     */
    public function show(Commande $commande): Response
    {
        return $this->render('commande/show.html.twig', [
            'commande' => $commande,
        ]);
    }

    /**
     * @Route("/{id_commande}/edit", name="app_commande_edit", methods={"GET", "POST"})
     *
     */
    public function edit(Request $request, Commande $commande, CommandeRepository $commandeRepository): Response
    {
        $form = $this->createForm(CommandeType::class, $commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $commandeRepository->add($commande);
            return $this->redirectToRoute('app_commande_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('commande/edit.html.twig', [
            'commande' => $commande,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id_commande}", name="app_commande_delete", methods={"POST"})
     */
    public function delete(Request $request, Commande $commande, CommandeRepository $commandeRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$commande->getId_commande(), $request->request->get('_token'))) {
            $commandeRepository->remove($commande);
        }

        return $this->redirectToRoute('app_commande_index', [], Response::HTTP_SEE_OTHER);
    }

    public function calculpanier(int $iduser,PanierRepository $repo,Request $req) : float {
        {
            $total = 0;
            $pc=new PanierController();
           $panier=$pc->chercherpanierbyuser($repo,$req,$iduser);
           $total+=$panier->getTotalpanier();
            return $total;
        }
    }

}
