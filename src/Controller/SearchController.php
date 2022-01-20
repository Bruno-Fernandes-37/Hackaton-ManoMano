<?php

namespace App\Controller;

use App\Repository\ItemRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SearchController extends AbstractController
{
    /**
     * @Route("/search", name="search")
     */
    public function index(ItemRepository $itemRepository): Response
    {

        return $this->render('search/index.html.twig', [
            'items' => $itemRepository->findAll(),
        ]);
    }
}
