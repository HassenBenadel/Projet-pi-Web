<?php

namespace App\Controller;

use App\Entity\CodeReduction;
use App\Form\CodeReductionType;
use App\Repository\CodeReductionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @Route("/code/reduction")
 */
class CodeReductionController extends AbstractController
{
    /**
     * @Route("/", name="app_code_reduction_index", methods={"GET"})
     */
    public function index(CodeReductionRepository $codeReductionRepository): Response
    {
        return $this->render('code_reduction/index.html.twig', [
            'code_reductions' => $codeReductionRepository->findAll(),
        ]);
    }
    
    /**
     * @Route("/new", name="app_code_reduction_new", methods={"GET", "POST"})
     */
    public function new(Request $request,string $code,int $pourcentage,CodeReductionRepository $CodeReductionRepository) : void
    {
    $code = new CodeReduction();
$code->setPourcentage($pourcentage);
$CodeReductionRepository->add($code);
        echo 'Envoyé';
}


    /**
     * @Route("/{code}", name="app_code_reduction_show", methods={"GET"})
     */
    public function show(CodeReduction $codeReduction): Response
    {
        return $this->render('code_reduction/show.html.twig', [
            'code_reduction' => $codeReduction,
        ]);
    }

    /**
     * @Route("/{code}/edit", name="app_code_reduction_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, CodeReduction $codeReduction, CodeReductionRepository $codeReductionRepository): Response
    {
        $form = $this->createForm(CodeReductionType::class, $codeReduction);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $codeReductionRepository->add($codeReduction);
            return $this->redirectToRoute('app_code_reduction_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('code_reduction/edit.html.twig', [
            'code_reduction' => $codeReduction,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{code}", name="app_code_reduction_delete", methods={"POST"})
     */
    public function delete(Request $request, CodeReduction $codeReduction, CodeReductionRepository $codeReductionRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$codeReduction->getCode(), $request->request->get('_token'))) {
            $codeReductionRepository->remove($codeReduction);
        }

        return $this->redirectToRoute('app_code_reduction_index', [], Response::HTTP_SEE_OTHER);
    }

    public function pourcentagecode(string $code,CodeReductionRepository $repo) :int
    {
        $p=0;
        $code=$repo->findBy(['code'=>$code]); 
        return $p;
    }
}
