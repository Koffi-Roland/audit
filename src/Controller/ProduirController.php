<?php

namespace App\Controller;

use App\Entity\Produir;
use App\Form\ProduirType;
use App\Repository\ProduirRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/produir")
 */
class ProduirController extends AbstractController
{
    /**
     * @Route("/", name="produir_index", methods={"GET"})
     */
    public function index(ProduirRepository $produirRepository): Response
    {
        return $this->render('produir/index.html.twig', [
            'produirs' => $produirRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="produir_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $produir = new Produir();
        $form = $this->createForm(ProduirType::class, $produir);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($produir);
            $entityManager->flush();

            return $this->redirectToRoute('produir_index');
        }

        return $this->render('produir/new.html.twig', [
            'produir' => $produir,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="produir_show", methods={"GET"})
     */
    public function show(Produir $produir): Response
    {
        return $this->render('produir/show.html.twig', [
            'produir' => $produir,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="produir_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Produir $produir): Response
    {
        $form = $this->createForm(ProduirType::class, $produir);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('produir_index');
        }

        return $this->render('produir/edit.html.twig', [
            'produir' => $produir,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="produir_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Produir $produir): Response
    {
        if ($this->isCsrfTokenValid('delete'.$produir->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($produir);
            $entityManager->flush();
        }

        return $this->redirectToRoute('produir_index');
    }
}
