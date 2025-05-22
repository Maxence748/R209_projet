<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
final class R209Controller extends AbstractController
{
    #[IsGranted('ROLE_USER')]
    #[Route('/r209', name: 'app_r209')]
    public function index(): Response
    {
        return $this->render('r209/index.html.twig', [
            'controller_name' => 'R209Controller',
        ]);
    }
}
