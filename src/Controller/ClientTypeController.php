<?php

namespace App\Controller;

use App\Entity\ClientType;
use App\Form\ClientTypeType;
use App\Repository\ClientTypeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/client/type')]
class ClientTypeController extends AbstractController
{
    #[Route('/', name: 'app_client_type_index', methods: ['GET'])]
    public function index(ClientTypeRepository $clientTypeRepository): Response
    {
        return $this->render('client_type/index.html.twig', [
            'client_types' => $clientTypeRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_client_type_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ClientTypeRepository $clientTypeRepository): Response
    {
        $clientType = new ClientType();
        $form = $this->createForm(ClientTypeType::class, $clientType);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $clientTypeRepository->save($clientType, true);

            return $this->redirectToRoute('app_client_type_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('client_type/new.html.twig', [
            'client_type' => $clientType,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_client_type_show', methods: ['GET'])]
    public function show(ClientType $clientType): Response
    {
        return $this->render('client_type/show.html.twig', [
            'client_type' => $clientType,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_client_type_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ClientType $clientType, ClientTypeRepository $clientTypeRepository): Response
    {
        $form = $this->createForm(ClientTypeType::class, $clientType);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $clientTypeRepository->save($clientType, true);

            return $this->redirectToRoute('app_client_type_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('client_type/edit.html.twig', [
            'client_type' => $clientType,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_client_type_delete', methods: ['POST'])]
    public function delete(Request $request, ClientType $clientType, ClientTypeRepository $clientTypeRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$clientType->getId(), $request->request->get('_token'))) {
            $clientTypeRepository->remove($clientType, true);
        }

        return $this->redirectToRoute('app_client_type_index', [], Response::HTTP_SEE_OTHER);
    }
}
