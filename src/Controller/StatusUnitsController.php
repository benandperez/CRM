<?php

namespace App\Controller;

use App\Entity\StatusUnits;
use App\Form\StatusUnitsType;
use App\Repository\StatusUnitsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/status/units')]
class StatusUnitsController extends AbstractController
{
    #[Route('/', name: 'app_status_units_index', methods: ['GET'])]
    public function index(StatusUnitsRepository $statusUnitsRepository): Response
    {
        return $this->render('status_units/index.html.twig', [
            'status_units' => $statusUnitsRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_status_units_new', methods: ['GET', 'POST'])]
    public function new(Request $request, StatusUnitsRepository $statusUnitsRepository): Response
    {
        $statusUnit = new StatusUnits();
        $form = $this->createForm(StatusUnitsType::class, $statusUnit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $statusUnitsRepository->save($statusUnit, true);

            return $this->redirectToRoute('app_status_units_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('status_units/new.html.twig', [
            'status_unit' => $statusUnit,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_status_units_show', methods: ['GET'])]
    public function show(StatusUnits $statusUnit): Response
    {
        return $this->render('status_units/show.html.twig', [
            'status_unit' => $statusUnit,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_status_units_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, StatusUnits $statusUnit, StatusUnitsRepository $statusUnitsRepository): Response
    {
        $form = $this->createForm(StatusUnitsType::class, $statusUnit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $statusUnitsRepository->save($statusUnit, true);

            return $this->redirectToRoute('app_status_units_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('status_units/edit.html.twig', [
            'status_unit' => $statusUnit,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_status_units_delete', methods: ['POST'])]
    public function delete(Request $request, StatusUnits $statusUnit, StatusUnitsRepository $statusUnitsRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$statusUnit->getId(), $request->request->get('_token'))) {
            $statusUnitsRepository->remove($statusUnit, true);
        }

        return $this->redirectToRoute('app_status_units_index', [], Response::HTTP_SEE_OTHER);
    }
}
