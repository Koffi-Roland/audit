<?php

namespace App\Controller;

use App\Entity\IdentificationccpDanger;
use App\Form\IdentificationccpDangerType;
use App\Repository\IdentificationccpDangerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/identificationccp/danger")
 */
class IdentificationccpDangerController extends AbstractController
{
    /**
     * @Route("/", name="identificationccp_danger_index", methods={"GET"})
     */
    public function index(IdentificationccpDangerRepository $identificationccpDangerRepository): Response
    {
        return $this->render('identificationccp_danger/index.html.twig', [
            'identificationccp_dangers' => $identificationccpDangerRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="identificationccp_danger_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $identificationccpDanger = new IdentificationccpDanger();
        $form = $this->createForm(IdentificationccpDangerType::class, $identificationccpDanger);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($identificationccpDanger);
            $entityManager->flush();

            return $this->redirectToRoute('identificationccp_danger_index');
        }

        return $this->render('identificationccp_danger/new.html.twig', [
            'identificationccp_danger' => $identificationccpDanger,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="identificationccp_danger_show", methods={"GET"})
     */
    public function show(IdentificationccpDanger $identificationccpDanger): Response
    {
        return $this->render('identificationccp_danger/show.html.twig', [
            'identificationccp_danger' => $identificationccpDanger,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="identificationccp_danger_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, IdentificationccpDanger $identificationccpDanger): Response
    {
        $form = $this->createForm(IdentificationccpDangerType::class, $identificationccpDanger);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('identificationccp_danger_index');
        }

        return $this->render('identificationccp_danger/edit.html.twig', [
            'identificationccp_danger' => $identificationccpDanger,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="identificationccp_danger_delete", methods={"DELETE"})
     */
    public function delete(Request $request, IdentificationccpDanger $identificationccpDanger): Response
    {
        if ($this->isCsrfTokenValid('delete'.$identificationccpDanger->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($identificationccpDanger);
            $entityManager->flush();
        }

        return $this->redirectToRoute('identificationccp_danger_index');
    }
}
