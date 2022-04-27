<?php

namespace App\Controller;
use App\Form\EntityType;
use App\Entity\Livraison;
use App\Form\LivraisonType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
class LivraisonController extends AbstractController
{
    /**
     * @Route("/livraison", name="livraison")
     */
    public function index(): Response
    {
        return $this->render('livraison/index.html.twig', [
            'controller_name' => 'LivraisonController',
        ]);
    }
     /**
     * @Route("/addliv", name="addliv")
     */
    public function ajouterliv(Request $request)
    {

        $livraison= new Livraison();
        $form = $this->createForm(LivraisonType::class, $livraison);
        $form->add('Ajouter', SubmitType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() and $form->isValid()) {
          
            $em = $this->getDoctrine()->getManager();
        
            $em->persist($livraison);
            $em->flush();

            $this->addFlash(
                'info',
                'Ajout avec succées !'
            ); 

            return $this->redirectToRoute('afficherliv');
        
        }
        return $this->render('livraison/ajouterliv.html.twig', [
            'livraison' => $form->createView(),
        ]);
    }
     /**
     * @Route("/afficherliv", name="afficherliv")
     */
    public function afficherdepot(Request $request): Response
    {
        $r = $this->getDoctrine()->getRepository(Livraison::class);
        $livraison = $r->findAll();


        return $this->render('livraison/afficherlivraison.html.twig', array('livraisons' => $livraison));

    }
       /**
     * @Route("deleteliv/{id}", name="delliv")
     */
    public function delete($id)
    {
        $em = $this->getDoctrine()->getManager();
        $livraison = $this->getDoctrine()->getRepository(Livraison::class)->find($id);
        $em->remove($livraison);
        $em->flush();

        $this->addFlash(
            'info',
            'Suppression  avec succées !'
        );

        return $this->redirectToRoute('afficherliv');
    }
     /**
     * @Route("/modifierliv{id}", name="modliv")
     */
    public function modifierlivraison(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $livraison = $em->getRepository(Livraison::class)->find($id);
        $form = $this->createForm(LivraisonType::class, $livraison);
        $form->add('Modifier', SubmitType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($livraison);
            $em->flush();

            $this->addFlash(
                'info',
                'Modification  avec succées !'
            );
         
            return $this->redirectToRoute('afficherliv');
        }
        return $this->render('livraison/updatelivraison.html.twig', [
            'livraison' => $form->createView(),
        ]);
    }
}
