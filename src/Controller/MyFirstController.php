<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MyFirstController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(): Response
    {
        //return new Response("Yep");
        return $this->render('my_first/index.html.twig', [
            'controller_name' => 'MyFirstController',
        ]);
    }

    #[Route('/about', name: 'about')]
    public function about(): Response
    {
        //return new Response("Yep");
        return $this->render('my_first/about.html.twig', [
            'controller_name' => 'MyFirstController',
        ]);
    }
}
