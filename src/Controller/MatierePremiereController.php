<?php

namespace App\Controller;

use App\Entity\MatierePremiere;
use App\Form\MatierePremiereType;
use App\Repository\MatierePremiereRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/matiere/premiere")
 */
class MatierePremiereController extends AbstractController
{
    /**
     * @Route("/", name="matiere_premiere_index", methods={"GET"})
     */
    public function index(MatierePremiereRepository $matierePremiereRepository): Response
    {
        return $this->render('matiere_premiere/index.html.twig', [
            'matiere_premieres' => $matierePremiereRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="matiere_premiere_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $matierePremiere = new MatierePremiere();
        $form = $this->createForm(MatierePremiereType::class, $matierePremiere);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($matierePremiere);
            $entityManager->flush();

            return $this->redirectToRoute('matiere_premiere_index');
        }

        return $this->render('matiere_premiere/new.html.twig', [
            'matiere_premiere' => $matierePremiere,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="matiere_premiere_show", methods={"GET"})
     */
    public function show(MatierePremiere $matierePremiere): Response
    {
        return $this->render('matiere_premiere/show.html.twig', [
            'matiere_premiere' => $matierePremiere,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="matiere_premiere_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, MatierePremiere $matierePremiere): Response
    {
        $form = $this->createForm(MatierePremiereType::class, $matierePremiere);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('matiere_premiere_index');
        }

        return $this->render('matiere_premiere/edit.html.twig', [
            'matiere_premiere' => $matierePremiere,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="matiere_premiere_delete", methods={"DELETE"})
     */
    public function delete(Request $request, MatierePremiere $matierePremiere): Response
    {
        if ($this->isCsrfTokenValid('delete'.$matierePremiere->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($matierePremiere);
            $entityManager->flush();
        }

        return $this->redirectToRoute('matiere_premiere_index');
    }
}
