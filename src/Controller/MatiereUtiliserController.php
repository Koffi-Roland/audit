<?php

namespace App\Controller;

use App\Entity\MatiereUtiliser;
use App\Form\MatiereUtiliserType;
use App\Repository\MatiereUtiliserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/matiere/utiliser")
 */
class MatiereUtiliserController extends AbstractController
{
    /**
     * @Route("/", name="matiere_utiliser_index", methods={"GET"})
     */
    public function index(MatiereUtiliserRepository $matiereUtiliserRepository): Response
    {
        return $this->render('matiere_utiliser/index.html.twig', [
            'matiere_utilisers' => $matiereUtiliserRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="matiere_utiliser_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $matiereUtiliser = new MatiereUtiliser();
        $form = $this->createForm(MatiereUtiliserType::class, $matiereUtiliser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($matiereUtiliser);
            $entityManager->flush();

            return $this->redirectToRoute('matiere_utiliser_index');
        }

        return $this->render('matiere_utiliser/new.html.twig', [
            'matiere_utiliser' => $matiereUtiliser,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="matiere_utiliser_show", methods={"GET"})
     */
    public function show(MatiereUtiliser $matiereUtiliser): Response
    {
        return $this->render('matiere_utiliser/show.html.twig', [
            'matiere_utiliser' => $matiereUtiliser,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="matiere_utiliser_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, MatiereUtiliser $matiereUtiliser): Response
    {
        $form = $this->createForm(MatiereUtiliserType::class, $matiereUtiliser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('matiere_utiliser_index');
        }

        return $this->render('matiere_utiliser/edit.html.twig', [
            'matiere_utiliser' => $matiereUtiliser,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="matiere_utiliser_delete", methods={"DELETE"})
     */
    public function delete(Request $request, MatiereUtiliser $matiereUtiliser): Response
    {
        if ($this->isCsrfTokenValid('delete'.$matiereUtiliser->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($matiereUtiliser);
            $entityManager->flush();
        }

        return $this->redirectToRoute('matiere_utiliser_index');
    }
}
