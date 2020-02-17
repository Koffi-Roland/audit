<?php

namespace App\Controller;

use App\Entity\SystemeSurveillance;
use App\Form\SystemeSurveillanceType;
use App\Repository\SystemeSurveillanceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/systeme/surveillance")
 */
class SystemeSurveillanceController extends AbstractController
{
    /**
     * @Route("/", name="systeme_surveillance_index", methods={"GET"})
     */
    public function index(SystemeSurveillanceRepository $systemeSurveillanceRepository): Response
    {
        return $this->render('systeme_surveillance/index.html.twig', [
            'systeme_surveillances' => $systemeSurveillanceRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="systeme_surveillance_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $systemeSurveillance = new SystemeSurveillance();
        $form = $this->createForm(SystemeSurveillanceType::class, $systemeSurveillance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($systemeSurveillance);
            $entityManager->flush();

            return $this->redirectToRoute('systeme_surveillance_index');
        }

        return $this->render('systeme_surveillance/new.html.twig', [
            'systeme_surveillance' => $systemeSurveillance,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="systeme_surveillance_show", methods={"GET"})
     */
    public function show(SystemeSurveillance $systemeSurveillance): Response
    {
        return $this->render('systeme_surveillance/show.html.twig', [
            'systeme_surveillance' => $systemeSurveillance,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="systeme_surveillance_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, SystemeSurveillance $systemeSurveillance): Response
    {
        $form = $this->createForm(SystemeSurveillanceType::class, $systemeSurveillance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('systeme_surveillance_index');
        }

        return $this->render('systeme_surveillance/edit.html.twig', [
            'systeme_surveillance' => $systemeSurveillance,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="systeme_surveillance_delete", methods={"DELETE"})
     */
    public function delete(Request $request, SystemeSurveillance $systemeSurveillance): Response
    {
        if ($this->isCsrfTokenValid('delete'.$systemeSurveillance->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($systemeSurveillance);
            $entityManager->flush();
        }

        return $this->redirectToRoute('systeme_surveillance_index');
    }
}
