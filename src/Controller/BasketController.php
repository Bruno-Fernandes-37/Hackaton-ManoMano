<?php

namespace App\Controller;

use App\Repository\ItemRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BasketController extends AbstractController
{
    /**
     * @Route("/basket", name="basket")
     */
    public function basket(ItemRepository $itemRepository): Response
    {
        $totalPrice = 0;
        $totalArticles = 0;
        $items = $itemRepository->findAll();

        foreach ($items as $item) {
            $totalPrice += $item->getPrice() * $item->getQuantity();
            $totalArticles += $item->getQuantity();
        }

        return $this->render('basket/index.html.twig', [
           'items' => $items,
           'total' => $totalPrice,
           'articles' => $totalArticles,
        ]);
    }
}
