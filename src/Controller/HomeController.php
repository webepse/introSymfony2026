<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(): Response
    {
        $prenoms = [
            "nom1" => 20,
            "nom2" => 35,
            "nom3" => 15,
            "nom4" => 36,
        ];

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'name' => 'Mohamed',
            'name2' => "John",
            'myage' => 21,
            'myPrenoms' => $prenoms,
        ]);
    }
}
