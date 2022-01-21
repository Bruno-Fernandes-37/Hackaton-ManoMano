<?php

namespace App\Controller;

use App\Repository\ItemRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function index(ItemRepository $itemRepository): Response
    {
        $totalPrice = 0;
        $totalArticles = 0;
        $items = $itemRepository->findBy(
            ['isSelected' => true],
        );
        foreach ($items as $item) {
            $totalPrice += $item->getPrice() * $item->getQuantity();
            $totalArticles += $item->getQuantity();
        }
        return $this->render('dashboard/index.html.twig', [
            'total' => $totalPrice,
        ]);
    }
}
