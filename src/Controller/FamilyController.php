<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FamilyController extends AbstractController
{

    /**
     * @Route("/family", name="family_index")
     */
    public function family_index(): Response
    {
        return $this->render('family/index.html.twig');
    }

    /**
     * @Route("/family/new", name="family_new")
     */
    public function family_new(): Response
    {
        return $this->render('family/new.html.twig');
    }

    /**
     * @Route("/family/{id}", name="family_show")
     */
    public function family_show($id): Response
    {
        return $this->render('family/show.html.twig', [
            'id' => $id
        ]);
    }

    /**
     * @Route("/family/{id}/edit", name="family_edit")
     */
    public function family_edit($id): Response
    {
        return $this->render('family/edit.html.twig', [
            'id' => $id
        ]);
    }

}
