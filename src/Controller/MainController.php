<?php

namespace App\Controller;

use App\Repository\ProjectsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/main', name: 'main_index')]
    public function index( ProjectsRepository $projectsRepository): Response
    {
        return $this->render('main/index.html.twig', [
            'projects' => $projectsRepository->findall(),
        ]);
    }
}
