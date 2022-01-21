<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Item;
use App\Entity\Project;
use App\Repository\CategoryRepository;
use App\Repository\ItemRepository;
use App\Repository\ProjectRepository;
use Doctrine\ORM\EntityManagerInterface;
use phpDocumentor\Reflection\PseudoTypes\True_;
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
    public function index(
        EntityManagerInterface $entityManager,
        CategoryRepository $categoryRepository,
        ItemRepository $itemRepository
    ): Response {
        $project = new Project;
        $totalPrice = 0;
        $totalArticles = 0;
        $items = $itemRepository->findBy(
            ['isSelected' => true],
        );
        foreach ($items as $item) {
            $totalPrice += $item->getPrice() * $item->getQuantity();
            $totalArticles += $item->getQuantity();
        }

        if (!empty($_POST)) {
            foreach ($_POST as $name => $value) {
                $name = str_replace("_", " ", $name);
                $check = $categoryRepository->findOneBy(['name' => $name]);
                $check->setValid(true);
                $entityManager->persist($check);
                $entityManager->flush();
            }
        }
        $categories = $categoryRepository->findAll();
        return $this->render('bathroom/index.html.twig', [
            'categories' => $categories,
            'department' => Category::DEPARTMENT,
            'items' => $items,
            'total' => $totalPrice,
            'articles' => $totalArticles,
        ]);
    }
}
