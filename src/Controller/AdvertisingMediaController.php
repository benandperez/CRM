<?php

namespace App\Controller;

use App\Entity\AdvertisingMedia;
use App\Form\AdvertisingMediaType;
use App\Repository\AdvertisinMediaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/advertising/media')]
class AdvertisingMediaController extends AbstractController
{
    #[Route('/', name: 'app_advertising_media_index', methods: ['GET'])]
    public function index(AdvertisinMediaRepository $advertisinMediaRepository): Response
    {
        return $this->render('advertising_media/index.html.twig', [
            'advertising_media' => $advertisinMediaRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_advertising_media_new', methods: ['GET', 'POST'])]
    public function new(Request $request, AdvertisinMediaRepository $advertisinMediaRepository): Response
    {
        $advertisingMedia = new AdvertisingMedia();
        $form = $this->createForm(AdvertisingMediaType::class, $advertisingMedia);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $advertisinMediaRepository->save($advertisingMedia, true);

            return $this->redirectToRoute('app_advertising_media_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('advertising_media/new.html.twig', [
            'advertising_media' => $advertisingMedia,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_advertising_media_show', methods: ['GET'])]
    public function show(AdvertisingMedia $advertisingMedia): Response
    {
        return $this->render('advertising_media/show.html.twig', [
            'advertising_media' => $advertisingMedia,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_advertising_media_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, AdvertisingMedia $advertisingMedia, AdvertisinMediaRepository $advertisinMediaRepository): Response
    {
        $form = $this->createForm(AdvertisingMediaType::class, $advertisingMedia);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $advertisinMediaRepository->save($advertisingMedia, true);

            return $this->redirectToRoute('app_advertising_media_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('advertising_media/edit.html.twig', [
            'advertising_media' => $advertisingMedia,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_advertising_media_delete', methods: ['POST'])]
    public function delete(Request $request, AdvertisingMedia $advertisingMedia, AdvertisinMediaRepository $advertisinMediaRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$advertisingMedia->getId(), $request->request->get('_token'))) {
            $advertisinMediaRepository->remove($advertisingMedia, true);
        }

        return $this->redirectToRoute('app_advertising_media_index', [], Response::HTTP_SEE_OTHER);
    }
}
