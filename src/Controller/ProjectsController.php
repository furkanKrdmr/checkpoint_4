<?php

namespace App\Controller;

use App\Entity\Projects;
use App\Repository\ProjectsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjectsController extends AbstractController
{
    #[Route('/projects', name: 'projects')]
    public function index(ProjectsRepository $projectsRepository): Response
    {
        
        return $this->render('main/index.html.twig', [
            'projects' => $projectsRepository->findall(),
        ]);
    }
}
