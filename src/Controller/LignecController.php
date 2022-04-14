<?php

namespace App\Controller;

use App\Entity\Lignec;
use App\Form\LignecType;
use App\Repository\LignecRepository;
use App\Repository\PanierRepository;
use App\Controller\PanierController;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/lignec")
 */
class LignecController extends AbstractController
{
    /**
     * @Route("/", name="app_lignec_index", methods={"GET"})
     */
    public function index(LignecRepository $lignecRepository): Response
    {
        return $this->render('lignec/index.html.twig', [
            'lignecs' => $lignecRepository->findById(14),
        ]);
    }


          /**
     * @Route("/new", name="app_lignec_new", methods={"GET", "POST"})
     */
    public function new(Request $request,PanierRepository $rep,string $id_panier,int $codeArticle,int $quantite,LignecRepository $lignecRepository) : void
    {
        $lignec = new Lignec();
//$lignec->setPourcentage($pourcentage);
$lignec->setPrixLigne();
$p=new PanierController();
$p->miseajour( $idpanier,$lignecRepository,$request,$rep,9);
$lignecRepository->add($lignec);


        echo 'ligne ajoute';
    


}

    /**
     * @Route("/{id}", name="app_lignec_show", methods={"GET"})
     */
    public function show(Lignec $lignec): Response
    {
        return $this->render('lignec/show.html.twig', [
            'lignec' => $lignec,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_lignec_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Lignec $lignec, LignecRepository $lignecRepository): Response
    {
        $form = $this->createForm(LignecType::class, $lignec);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $lignecRepository->add($lignec);
            return $this->redirectToRoute('app_lignec_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('lignec/edit.html.twig', [
            'lignec' => $lignec,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_lignec_delete", methods={"POST"})
     */
    public function delete(Request $request, Lignec $lignec, LignecRepository $lignecRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$lignec->getId(), $request->request->get('_token'))) {
            $lignecRepository->remove($lignec);
        }

        return $this->redirectToRoute('app_lignec_index', [], Response::HTTP_SEE_OTHER);
    }
    /**
     * @Route("/recherchelig",name="rechercherlig")
     * */
public function prix(LignecRepository $repo,Request $req,/*string $idp,*/string $id_panier){
//recuperer var saisi dans form

$lignes=$repo->findBy(['id_panier'=>$id_panier]); //comparer nsc et data
foreach($lignes as $i => $item) {
$quantite=$item->getQuantite();
$total = $quantite * 200;}
return $total;
}

    /**
     * @Route("/{id}/plus", name="app_lignec_plus", methods={"GET", "POST"})
     */
public function Augmenter(Request $request,PanierRepository $rep,Lignec $lignec, LignecRepository $lignecRepository)
{
    $ancien=0;
    $ancien=$lignec->getQuantite();
    $lignec->setQuantite($ancien+1);
    $lignec->setPrixLigne();
    $lignecRepository->add($lignec);
    $p=new PanierController();
$p->miseajour($lignec->getIdPanier(),$lignecRepository,$request,$rep,9);
    return $this->render('lignec/index.html.twig', [
        'lignecs' => $lignecRepository->findById(14),
    ]);
     

}


    /**
     * @Route("/{id}/moins", name="app_lignec_moins", methods={"GET", "POST"})
     */
    public function dimunier(Request $request,PanierRepository $rep,Lignec $lignec, LignecRepository $lignecRepository)
    {
  
    $ancien=0;
    $ancien=$lignec->getQuantite();
    $lignec->setQuantite($ancien-1);
    $lignec->setPrixLigne();
    $lignecRepository->add($lignec);
    $p=new PanierController();
$p->miseajour( $lignec->getIdPanier(),$lignecRepository,$request,$rep,9);
    return $this->render('lignec/index.html.twig', [
        'lignecs' => $lignecRepository->findById(14),
    ]);
     
    }

 /**
     * @Route("/{id}/vider", name="app_vider", methods={ "GET", "POST"})
     */
    public function viderp(Request $request,PanierRepository $panierRepository,LignecRepository $lignecRepository)
{
    $p=new PanierController();

    $p->vider($request, 9,$panierRepository);
    $p->miseajour(14,$lignecRepository,$request,$panierRepository,9);
    return $this->render('lignec/index.html.twig', [
        'lignecs' => $lignecRepository->findById(14),
    ]);
}
}
