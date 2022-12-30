<?php

namespace App\Controller;

use App\Entity\Amenities;
use App\Form\AmenitiesType;
use App\Repository\AmenitiesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/amenities')]
class AmenitiesController extends AbstractController
{
    #[Route('/', name: 'app_amenities_index', methods: ['GET'])]
    public function index(AmenitiesRepository $amenitiesRepository): Response
    {
        return $this->render('amenities/index.html.twig', [
            'amenities' => $amenitiesRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_amenities_new', methods: ['GET', 'POST'])]
    public function new(Request $request, AmenitiesRepository $amenitiesRepository): Response
    {
        $amenity = new Amenities();
        $form = $this->createForm(AmenitiesType::class, $amenity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $amenitiesRepository->save($amenity, true);

            return $this->redirectToRoute('app_amenities_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('amenities/new.html.twig', [
            'amenity' => $amenity,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_amenities_show', methods: ['GET'])]
    public function show(Amenities $amenity): Response
    {
        return $this->render('amenities/show.html.twig', [
            'amenity' => $amenity,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_amenities_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Amenities $amenity, AmenitiesRepository $amenitiesRepository): Response
    {
        $form = $this->createForm(AmenitiesType::class, $amenity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $amenitiesRepository->save($amenity, true);

            return $this->redirectToRoute('app_amenities_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('amenities/edit.html.twig', [
            'amenity' => $amenity,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_amenities_delete', methods: ['POST'])]
    public function delete(Request $request, Amenities $amenity, AmenitiesRepository $amenitiesRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$amenity->getId(), $request->request->get('_token'))) {
            $amenitiesRepository->remove($amenity, true);
        }

        return $this->redirectToRoute('app_amenities_index', [], Response::HTTP_SEE_OTHER);
    }
}
