<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class FilloutTherapeuteController extends AbstractController
{
    #[Route('/fillout/therapeute', name: 'app_fillout_therapeute')]
    public function index(): Response
    {
        return $this->render('fillout_therapeute/index.html.twig', [
            'controller_name' => 'FilloutTherapeuteController',
        ]);
    }
}