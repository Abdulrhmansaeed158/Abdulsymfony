<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BlogcontrollerController extends AbstractController
{
    #[Route('/', name: 'accueil')]
    public function home(): Response
    {
        return $this->render('blogcontroller/home.html.twig', [
            'controller_name' => 'BlogcontrollerController',
        ]);
    }

    #[Route('/cv', name: 'cv')]
    public function cv(): Response
    {
        return $this->render('blogcontroller/cv.html.twig');
    }

    #[Route('/loisirs', name: 'loisirs')]
    public function loisirs(): Response
    {
        return $this->render('blogcontroller/loisirs.html.twig');
    }

    #[Route('/portfolio', name: 'portfolio')]
    public function portfolio(): Response
    {
        return $this->render('blogcontroller/portfolio.html.twig');
    }
}