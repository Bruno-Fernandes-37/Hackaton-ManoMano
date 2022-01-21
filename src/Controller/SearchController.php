<?php

namespace App\Controller;

use App\Entity\Item;
use App\Repository\ItemRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

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
    /**
     * @Route("/search/{id}", name="additem")
     */
    public function addItem(int $id, ItemRepository $itemRepository, EntityManagerInterface $em): Response
    {
        $item = $itemRepository->findOneBy(['id' => $id]);
        $item->setIsSelected(true);
        $em->persist($item);
        $em->flush();
        $this->addFlash(
            'info',
            "le produit a bien été ajouté dans votre sélection"
        );

        return $this->redirectToRoute('project_bathroom');
    }
}
