<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class LoginpageController extends AbstractController
{
    #[Route('/', name: 'loginpage')]
    public function index(): Response
    {
        return $this->render('loginpage/index.html.twig', [
            'controller_name' => 'LoginpageController',
        ]);
    }
}
