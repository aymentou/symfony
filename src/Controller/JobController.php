<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JobController extends AbstractController
{
    /**
     * @Route("/job", name="job")
     * 
     * 
     */
    public function index(): Response
    {
        return $this->render('job/index.html.twig', [
            'controller_name' => 'JobController',
        ]);
    }
  /**
     * @Route("/acceuil", name="acceuil")
     * 
     *
     */
    public function acceuil(): Response 
    {
    
        return $this->render('acceuil/index.html.twig', [
            'controller_name' => 'JobController',
        ]);
    }

/**
     * @Route("/voir/{id}", name="voir" ,requirements ={"id"="\d+"})
     * 
     *
     */

    public function voir($id): Response 
    {
    
        return new Response("hello page voir avec id".$id);
    }

    /**
     * @Route("/voir", name="voir" )
     * 
     *
     */

    public function voirfun(): Response 
    {
    
        return $this->render('voir.html.twig', [
            'controller_name' => 'JobController',
        ]);
    }
}
