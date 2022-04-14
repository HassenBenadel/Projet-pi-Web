<?php

namespace App\Controller;
use App\Repository\CodeReductionRepository;
use App\Entity\CarteFidelite;
use App\Form\CarteFideliteType;
use App\Repository\CarteFideliteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/carte/fidelite")
 */
class CarteFideliteController extends AbstractController
{
    /**
     * @Route("/", name="app_carte_fidelite_index", methods={"GET"})
     */
    public function index(CarteFideliteRepository $carteFideliteRepository): Response
    {
        return $this->render('carte_fidelite/index.html.twig', [
            'carte_fidelites' => $carteFideliteRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_carte_fidelite_new", methods={"GET", "POST"})
     */
    public function new(Request $request, CarteFideliteRepository $carteFideliteRepository): Response
    {
        $carteFidelite = new CarteFidelite();
        $form = $this->createForm(CarteFideliteType::class, $carteFidelite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $carteFidelite->setDatecreation(new \DateTime('now'));
            $carteFidelite->setDatefinvalidite(new \DateTime('now +4 year'));
    /*  $datecreation=$carteFidelite->setDatecreation();
    $date = date_parse($datecreation);
    $jour = $date['day'];
    $mois = $date['month'];
    $annee = $date['year']*/
            $carteFidelite->setNumpoint(0);
            $carteFideliteRepository->add($carteFidelite);
            return $this->redirectToRoute('app_carte_fidelite_show', ['Num_carte'=> $carteFidelite->getNum_carte()], Response::HTTP_SEE_OTHER);
        }

        return $this->render('carte_fidelite/new.html.twig', [
            'carte_fidelite' => $carteFidelite,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{Num_carte}", name="app_carte_fidelite_show", methods={"GET"})
     */
    public function show(CarteFidelite $carteFidelite): Response
    {
        return $this->render('carte_fidelite/show.html.twig', [
             'carte_fidelite' => $carteFidelite,
        ]);
    }
    
    /**
     * @Route("/{Num_carte}", name="app_carte_fidelite_showadmin", methods={"GET"})
     */
    public function showadmin(CarteFidelite $carteFidelite): Response
    {
        return $this->render('carte_fidelite/showadmin.html.twig', [
             'carte_fidelite' => $carteFidelite,
        ]);
    }

    /**
     * @Route("/{Num_carte}/edit", name="app_carte_fidelite_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, CarteFidelite $carteFidelite, CarteFideliteRepository $carteFideliteRepository): Response
    {
        //$date = new DateTime();
        $date = $carteFidelite->getDatefinvalidite();
        $dobStringValue = $date->format('Y-m-d');
        $dobReconverted = \DateTime::createFromFormat('Y-m-d', $dobStringValue); 
        //$date->modify('+4 year');
        $carteFidelite->getDatefinvalidite();
        $carteFidelite->setDatefinvalidite(date_modify($dobReconverted,'+4 year'));
            $carteFideliteRepository->add($carteFidelite);
            return $this->render('carte_fidelite/edit.html.twig', [
             'carte_fidelite' => $carteFidelite,
        ]);
        

    
    }

    /**
     * @Route("/{Num_carte}", name="app_carte_fidelite_delete", methods={"POST"})
     */
    public function delete(Request $request, CarteFidelite $carteFidelite, CarteFideliteRepository $carteFideliteRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$carteFidelite->getNum_carte(), $request->request->get('_token'))) {
            $carteFideliteRepository->remove($carteFidelite);
        }

        return $this->redirectToRoute('app_carte_fidelite_index', [], Response::HTTP_SEE_OTHER);
    }
      /**
     * @Route("/cherchecarte",name="cherchercarte")
     * */
public function cherchercarte(CarteFideliteRepository $repo,Request $req,int $num){
    
    
    $c=$repo->findOneBynum($num); 
    return $c;
    }
    /**
     * @Route("/{Num_carte}/{cherchecartebyid",name="cherchercartebyid",methods={"GET"})
     * */
    function cherchercartebyid(CarteFideliteRepository $repo,Request $req,int $idclient): CarteFidelite {
    
    
        $c=$repo->findOneByid($idclient); 
        return $c;
        }
    
/**
     * @Route("/{Num_carte}/convert", name="app_carte_fidelite_convert", methods={"GET", "POST"})
     */
    public function convertirlespoints(Request $req,CarteFidelite $Carte/*,int $nbre*/,CodeReductionRepository $CodeReductionRepository, CarteFideliteRepository $carteFideliteRepository) : string
     { //$carte=$this->cherchercarte($repo,$req,$num);
         $promo="erreur";
         $nbre =20;
         $code = new CodeReductionController();
    
         if($Carte->getNumpoint() > 0)
         {
           // System.out.println("Choisir nombre de points a convertir:");
            //int nbre = sc.nextInt(); 
           // System.out.println("lu");
            if($Carte->getNumpoint() >= $nbre && $nbre <= 100)
            {
                $pourcentage=$nbre/5;
                //System.out.println(pourcentage);
               $int_random = 50;  
                $promo=$nbre + $int_random /*.toString() new java.util.Date().toString()*/;
              //  System.out.println(promo);
                $code->new($req,$promo,$pourcentage,$CodeReductionRepository/*,Carte.getNumCarte()*/);
                 
                 $Carte->setNumpoint($Carte->getNumpoint() - $nbre);
                 $this->editpt($req,$Carte,$carteFideliteRepository);
                 
            }
         } 
         return $promo;
     }


    /**
     * @Route("/editpt", name="app_carte_fidelite_editpt", methods={"GET", "POST"})
     */
    public function editpt(Request $request, CarteFidelite $carteFidelite, CarteFideliteRepository $carteFideliteRepository)
    {
        

       
            $carteFideliteRepository->add($carteFidelite);
            echo 'modifie';
           // return $this->redirectToRoute('app_carte_fidelite_show');
            
        }
        

        public function Pointparcommande(Request $request,CarteFideliteRepository $repo,int $ptajout,int $num)
        {
            $point=0;
            $c=$repo->findOneBynum($num); 
            $point=$c->getNumpoint();
        $point+=$ptajout;
        $c->setNumpoint($point);
        $this->editpt($request,$c,$repo);
        }
        
    



}
