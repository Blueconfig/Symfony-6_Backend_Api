<?php

namespace App\Controller\Backoffice;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashbordController extends AbstractController
{
    #[Route('/backoffice', name: 'app_backoffice_dashbord')]
    public function index(): Response
    {
        return $this->render('backoffice/dashbord/index.html.twig', [
            'controller_name' => 'DashbordController',
        ]);
    }
}
