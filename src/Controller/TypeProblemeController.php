<?php

namespace App\Controller;

use App\Entity\TypeProbleme;
use App\Form\TypeProblemeType;
use App\Repository\TypeProblemeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/type/probleme")
 */
class TypeProblemeController extends AbstractController
{
    /**
     * @Route("/", name="type_probleme_index", methods={"GET"})
     */
    public function index(TypeProblemeRepository $typeProblemeRepository): Response
    {
        return $this->render('type_probleme/index.html.twig', [
            'type_problemes' => $typeProblemeRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="type_probleme_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $typeProbleme = new TypeProbleme();
        $form = $this->createForm(TypeProblemeType::class, $typeProbleme);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($typeProbleme);
            $entityManager->flush();

            return $this->redirectToRoute('type_probleme_index');
        }

        return $this->render('type_probleme/new.html.twig', [
            'type_probleme' => $typeProbleme,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="type_probleme_show", methods={"GET"})
     */
    public function show(TypeProbleme $typeProbleme): Response
    {
        return $this->render('type_probleme/show.html.twig', [
            'type_probleme' => $typeProbleme,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="type_probleme_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, TypeProbleme $typeProbleme): Response
    {
        $form = $this->createForm(TypeProblemeType::class, $typeProbleme);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('type_probleme_index');
        }

        return $this->render('type_probleme/edit.html.twig', [
            'type_probleme' => $typeProbleme,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="type_probleme_delete", methods={"DELETE"})
     */
    public function delete(Request $request, TypeProbleme $typeProbleme): Response
    {
        if ($this->isCsrfTokenValid('delete'.$typeProbleme->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($typeProbleme);
            $entityManager->flush();
        }

        return $this->redirectToRoute('type_probleme_index');
    }
}
