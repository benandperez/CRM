<?php

namespace App\Controller;

use App\Entity\InterestLevel;
use App\Form\InterestLevelType;
use App\Repository\InterestLevelRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/interest/level')]
class InterestLevelController extends AbstractController
{
    #[Route('/', name: 'app_interest_level_index', methods: ['GET'])]
    public function index(InterestLevelRepository $interestLevelRepository): Response
    {
        return $this->render('interest_level/index.html.twig', [
            'interest_levels' => $interestLevelRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_interest_level_new', methods: ['GET', 'POST'])]
    public function new(Request $request, InterestLevelRepository $interestLevelRepository): Response
    {
        $interestLevel = new InterestLevel();
        $form = $this->createForm(InterestLevelType::class, $interestLevel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $interestLevelRepository->save($interestLevel, true);

            return $this->redirectToRoute('app_interest_level_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('interest_level/new.html.twig', [
            'interest_level' => $interestLevel,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_interest_level_show', methods: ['GET'])]
    public function show(InterestLevel $interestLevel): Response
    {
        return $this->render('interest_level/show.html.twig', [
            'interest_level' => $interestLevel,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_interest_level_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, InterestLevel $interestLevel, InterestLevelRepository $interestLevelRepository): Response
    {
        $form = $this->createForm(InterestLevelType::class, $interestLevel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $interestLevelRepository->save($interestLevel, true);

            return $this->redirectToRoute('app_interest_level_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('interest_level/edit.html.twig', [
            'interest_level' => $interestLevel,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_interest_level_delete', methods: ['POST'])]
    public function delete(Request $request, InterestLevel $interestLevel, InterestLevelRepository $interestLevelRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$interestLevel->getId(), $request->request->get('_token'))) {
            $interestLevelRepository->remove($interestLevel, true);
        }

        return $this->redirectToRoute('app_interest_level_index', [], Response::HTTP_SEE_OTHER);
    }
}
