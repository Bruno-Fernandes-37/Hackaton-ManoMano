<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Item;
use App\Entity\Project;
use App\Repository\CategoryRepository;
use App\Repository\ItemRepository;
use App\Repository\ProjectRepository;
use Doctrine\ORM\EntityManagerInterface;
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
    public function index(ProjectRepository $projectRepository, ItemRepository $itemRepository, CategoryRepository $categoryRepository): Response
    {
        $project = $projectRepository->findOneByTitle('Salle de bain');
        $items = $itemRepository->findAll();
        $categories = $categoryRepository->findAll();
        return $this->renderForm('bathroom/index.html.twig', [
            'project' => $project,
            'categories' => $categories,
            'items' => $items,
            'department' => Category::DEPARTMENT,
        ]);
    }
}