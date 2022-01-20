<?php

namespace App\Controller;

use App\Entity\Item;
use App\Entity\Project;
use App\Repository\ProjectRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/project", name="project_")
 */
class BathroomController extends AbstractController
{
    /**
     * @Route("/bathroom", name="bathroom")
     */
    public function index(Request $request, ProjectRepository $projectRepository, Item $item): Response
    {
        $form = $this->createForm(ItemType::class, $item);
        $form->handleRequest($request);
        
        return $this->renderForm('bathroom/index.html.twig', [
            'project' => $projectRepository->findByTitle('bathroom'),
            'form' => $form,
        ]);
    }
}