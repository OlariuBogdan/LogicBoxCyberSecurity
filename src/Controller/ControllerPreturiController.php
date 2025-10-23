<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ControllerPreturiController extends AbstractController
{
    #[Route('/preturi', name: 'app_controller_preturi')]
    public function index(): Response
    {
        return $this->render('controller_preturi/index.html.twig', [
            'controller_name' => 'ControllerPreturiController',
        ]);
    }
}
