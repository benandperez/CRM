<?php

namespace App\Controller;

use App\Entity\ConstructionType;
use App\Form\ContructionTypeType;
use App\Repository\ContructionTypeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/contruction/type')]
class ContructionTypeController extends AbstractController
{
    #[Route('/', name: 'app_contruction_type_index', methods: ['GET'])]
    public function index(ContructionTypeRepository $contructionTypeRepository): Response
    {
        return $this->render('contruction_type/index.html.twig', [
            'contruction_types' => $contructionTypeRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_contruction_type_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ContructionTypeRepository $contructionTypeRepository): Response
    {
        $contructionType = new ConstructionType();
        $form = $this->createForm(ContructionTypeType::class, $contructionType);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $contructionTypeRepository->save($contructionType, true);

            return $this->redirectToRoute('app_contruction_type_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('contruction_type/new.html.twig', [
            'contruction_type' => $contructionType,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_contruction_type_show', methods: ['GET'])]
    public function show(ConstructionType $contructionType): Response
    {
        return $this->render('contruction_type/show.html.twig', [
            'contruction_type' => $contructionType,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_contruction_type_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ConstructionType $contructionType, ContructionTypeRepository $contructionTypeRepository): Response
    {
        $form = $this->createForm(ContructionTypeType::class, $contructionType);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $contructionTypeRepository->save($contructionType, true);

            return $this->redirectToRoute('app_contruction_type_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('contruction_type/edit.html.twig', [
            'contruction_type' => $contructionType,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_contruction_type_delete', methods: ['POST'])]
    public function delete(Request $request, ConstructionType $contructionType, ContructionTypeRepository $contructionTypeRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$contructionType->getId(), $request->request->get('_token'))) {
            $contructionTypeRepository->remove($contructionType, true);
        }

        return $this->redirectToRoute('app_contruction_type_index', [], Response::HTTP_SEE_OTHER);
    }
}
