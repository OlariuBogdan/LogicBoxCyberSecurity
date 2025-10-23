<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\PricingPlan;

final class ControllerPreturiController extends AbstractController
{
    #[Route('/preturi', name: 'app_controller_preturi')]
    public function index(ManagerRegistry $doctrine): Response
    {
        // Preluăm toate planurile din baza de date
        $pricingPlans = $doctrine->getRepository(PricingPlan::class)->findAll();

        // Trimitem variabilele către Twig
        return $this->render('controller_preturi/index.html.twig', [
            'pricing_plans' => $pricingPlans
        ]);
    }
}
