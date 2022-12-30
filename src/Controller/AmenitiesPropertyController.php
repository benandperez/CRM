<?php

namespace App\Controller;

use App\Entity\AmenitiesProperty;
use App\Form\AmenitiesPropertyType;
use App\Repository\AmenitiesPropertyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/amenities/property')]
class AmenitiesPropertyController extends AbstractController
{
    #[Route('/', name: 'app_amenities_property_index', methods: ['GET'])]
    public function index(AmenitiesPropertyRepository $amenitiesPropertyRepository): Response
    {
        return $this->render('amenities_property/index.html.twig', [
            'amenities_properties' => $amenitiesPropertyRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_amenities_property_new', methods: ['GET', 'POST'])]
    public function new(Request $request, AmenitiesPropertyRepository $amenitiesPropertyRepository): Response
    {
        $amenitiesProperty = new AmenitiesProperty();
        $form = $this->createForm(AmenitiesPropertyType::class, $amenitiesProperty);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $amenitiesPropertyRepository->save($amenitiesProperty, true);

            return $this->redirectToRoute('app_amenities_property_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('amenities_property/new.html.twig', [
            'amenities_property' => $amenitiesProperty,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_amenities_property_show', methods: ['GET'])]
    public function show(AmenitiesProperty $amenitiesProperty): Response
    {
        return $this->render('amenities_property/show.html.twig', [
            'amenities_property' => $amenitiesProperty,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_amenities_property_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, AmenitiesProperty $amenitiesProperty, AmenitiesPropertyRepository $amenitiesPropertyRepository): Response
    {
        $form = $this->createForm(AmenitiesPropertyType::class, $amenitiesProperty);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $amenitiesPropertyRepository->save($amenitiesProperty, true);

            return $this->redirectToRoute('app_amenities_property_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('amenities_property/edit.html.twig', [
            'amenities_property' => $amenitiesProperty,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_amenities_property_delete', methods: ['POST'])]
    public function delete(Request $request, AmenitiesProperty $amenitiesProperty, AmenitiesPropertyRepository $amenitiesPropertyRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$amenitiesProperty->getId(), $request->request->get('_token'))) {
            $amenitiesPropertyRepository->remove($amenitiesProperty, true);
        }

        return $this->redirectToRoute('app_amenities_property_index', [], Response::HTTP_SEE_OTHER);
    }
}
