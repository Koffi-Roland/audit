<?php

namespace App\Controller;

use App\Entity\TravaillerPersonnel;
use App\Form\TravaillerPersonnelType;
use App\Repository\TravaillerPersonnelRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/travailler/personnel")
 */
class TravaillerPersonnelController extends AbstractController
{
    /**
     * @Route("/", name="travailler_personnel_index", methods={"GET"})
     */
    public function index(TravaillerPersonnelRepository $travaillerPersonnelRepository): Response
    {
        return $this->render('travailler_personnel/index.html.twig', [
            'travailler_personnels' => $travaillerPersonnelRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="travailler_personnel_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $travaillerPersonnel = new TravaillerPersonnel();
        $form = $this->createForm(TravaillerPersonnelType::class, $travaillerPersonnel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($travaillerPersonnel);
            $entityManager->flush();

            return $this->redirectToRoute('travailler_personnel_index');
        }

        return $this->render('travailler_personnel/new.html.twig', [
            'travailler_personnel' => $travaillerPersonnel,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="travailler_personnel_show", methods={"GET"})
     */
    public function show(TravaillerPersonnel $travaillerPersonnel): Response
    {
        return $this->render('travailler_personnel/show.html.twig', [
            'travailler_personnel' => $travaillerPersonnel,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="travailler_personnel_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, TravaillerPersonnel $travaillerPersonnel): Response
    {
        $form = $this->createForm(TravaillerPersonnelType::class, $travaillerPersonnel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('travailler_personnel_index');
        }

        return $this->render('travailler_personnel/edit.html.twig', [
            'travailler_personnel' => $travaillerPersonnel,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="travailler_personnel_delete", methods={"DELETE"})
     */
    public function delete(Request $request, TravaillerPersonnel $travaillerPersonnel): Response
    {
        if ($this->isCsrfTokenValid('delete'.$travaillerPersonnel->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($travaillerPersonnel);
            $entityManager->flush();
        }

        return $this->redirectToRoute('travailler_personnel_index');
    }
}
