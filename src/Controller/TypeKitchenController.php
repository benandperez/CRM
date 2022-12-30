<?php

namespace App\Controller;

use App\Entity\TypeKitchen;
use App\Form\TypeKitchenType;
use App\Repository\TypeKitchenRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/type/kitchen')]
class TypeKitchenController extends AbstractController
{
    #[Route('/', name: 'app_type_kitchen_index', methods: ['GET'])]
    public function index(TypeKitchenRepository $typeKitchenRepository): Response
    {
        return $this->render('type_kitchen/index.html.twig', [
            'type_kitchens' => $typeKitchenRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_type_kitchen_new', methods: ['GET', 'POST'])]
    public function new(Request $request, TypeKitchenRepository $typeKitchenRepository): Response
    {
        $typeKitchen = new TypeKitchen();
        $form = $this->createForm(TypeKitchenType::class, $typeKitchen);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $typeKitchenRepository->save($typeKitchen, true);

            return $this->redirectToRoute('app_type_kitchen_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('type_kitchen/new.html.twig', [
            'type_kitchen' => $typeKitchen,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_type_kitchen_show', methods: ['GET'])]
    public function show(TypeKitchen $typeKitchen): Response
    {
        return $this->render('type_kitchen/show.html.twig', [
            'type_kitchen' => $typeKitchen,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_type_kitchen_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, TypeKitchen $typeKitchen, TypeKitchenRepository $typeKitchenRepository): Response
    {
        $form = $this->createForm(TypeKitchenType::class, $typeKitchen);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $typeKitchenRepository->save($typeKitchen, true);

            return $this->redirectToRoute('app_type_kitchen_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('type_kitchen/edit.html.twig', [
            'type_kitchen' => $typeKitchen,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_type_kitchen_delete', methods: ['POST'])]
    public function delete(Request $request, TypeKitchen $typeKitchen, TypeKitchenRepository $typeKitchenRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$typeKitchen->getId(), $request->request->get('_token'))) {
            $typeKitchenRepository->remove($typeKitchen, true);
        }

        return $this->redirectToRoute('app_type_kitchen_index', [], Response::HTTP_SEE_OTHER);
    }
}
