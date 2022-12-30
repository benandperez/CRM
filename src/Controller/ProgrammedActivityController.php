<?php

namespace App\Controller;

use App\Entity\ProgrammedActivity;
use App\Form\ProgrammedActivityType;
use App\Repository\ProgrammedActivityRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/programmed/activity')]
class ProgrammedActivityController extends AbstractController
{
    #[Route('/', name: 'app_programmed_activity_index', methods: ['GET'])]
    public function index(ProgrammedActivityRepository $programmedActivityRepository): Response
    {
        return $this->render('programmed_activity/index.html.twig', [
            'programmed_activities' => $programmedActivityRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_programmed_activity_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ProgrammedActivityRepository $programmedActivityRepository): Response
    {
        $programmedActivity = new ProgrammedActivity();
        $form = $this->createForm(ProgrammedActivityType::class, $programmedActivity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $programmedActivityRepository->save($programmedActivity, true);

            return $this->redirectToRoute('app_programmed_activity_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('programmed_activity/new.html.twig', [
            'programmed_activity' => $programmedActivity,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_programmed_activity_show', methods: ['GET'])]
    public function show(ProgrammedActivity $programmedActivity): Response
    {
        return $this->render('programmed_activity/show.html.twig', [
            'programmed_activity' => $programmedActivity,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_programmed_activity_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ProgrammedActivity $programmedActivity, ProgrammedActivityRepository $programmedActivityRepository): Response
    {
        $form = $this->createForm(ProgrammedActivityType::class, $programmedActivity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $programmedActivityRepository->save($programmedActivity, true);

            return $this->redirectToRoute('app_programmed_activity_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('programmed_activity/edit.html.twig', [
            'programmed_activity' => $programmedActivity,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_programmed_activity_delete', methods: ['POST'])]
    public function delete(Request $request, ProgrammedActivity $programmedActivity, ProgrammedActivityRepository $programmedActivityRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$programmedActivity->getId(), $request->request->get('_token'))) {
            $programmedActivityRepository->remove($programmedActivity, true);
        }

        return $this->redirectToRoute('app_programmed_activity_index', [], Response::HTTP_SEE_OTHER);
    }
}
