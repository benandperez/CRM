<?php

namespace App\Controller;

use App\Entity\PropertyClass;
use App\Form\PropertyClassType;
use App\Repository\PropertyClassRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/property/class')]
class PropertyClassController extends AbstractController
{
    #[Route('/', name: 'app_property_class_index', methods: ['GET'])]
    public function index(PropertyClassRepository $propertyClassRepository): Response
    {
        return $this->render('property_class/index.html.twig', [
            'property_classes' => $propertyClassRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_property_class_new', methods: ['GET', 'POST'])]
    public function new(Request $request, PropertyClassRepository $propertyClassRepository): Response
    {
        $propertyClass = new PropertyClass();
        $form = $this->createForm(PropertyClassType::class, $propertyClass);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $propertyClassRepository->save($propertyClass, true);

            return $this->redirectToRoute('app_property_class_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('property_class/new.html.twig', [
            'property_class' => $propertyClass,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_property_class_show', methods: ['GET'])]
    public function show(PropertyClass $propertyClass): Response
    {
        return $this->render('property_class/show.html.twig', [
            'property_class' => $propertyClass,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_property_class_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, PropertyClass $propertyClass, PropertyClassRepository $propertyClassRepository): Response
    {
        $form = $this->createForm(PropertyClassType::class, $propertyClass);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $propertyClassRepository->save($propertyClass, true);

            return $this->redirectToRoute('app_property_class_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('property_class/edit.html.twig', [
            'property_class' => $propertyClass,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_property_class_delete', methods: ['POST'])]
    public function delete(Request $request, PropertyClass $propertyClass, PropertyClassRepository $propertyClassRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$propertyClass->getId(), $request->request->get('_token'))) {
            $propertyClassRepository->remove($propertyClass, true);
        }

        return $this->redirectToRoute('app_property_class_index', [], Response::HTTP_SEE_OTHER);
    }
}
