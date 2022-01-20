<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;


class CategoryFixtures extends Fixture
{
    /**
     * 23 categories
     */
    public const CATEGORIES = [ 
        [
            'name' => 'baignoire et accessoires',
            'department' => Category::DEPARTMENT[0], //0
        ],[
            'name' => 'WC et accessoires',
            'department' => Category::DEPARTMENT[0],//1
        ],[
            'name' => 'lavabos et vasques',
            'department' => Category::DEPARTMENT[0],//2
        ],[
            'name' => 'miroirs',
            'department' => Category::DEPARTMENT[0],//3
        ],[
            'name' => 'accessoires de salle de bain',
            'department' => Category::DEPARTMENT[0],//4
        ],[
            'name' => 'sauna',
            'department' => Category::DEPARTMENT[0],//5
        ],[
            'name' => 'sèche serviettes',
            'department' => Category::DEPARTMENT[1],//6
        ],[
            'name' => 'robinets pour lavabos et vasques',
            'department' => Category::DEPARTMENT[1],//7
        ],[
            'name' => 'robinets pour baignoires',
            'department' => Category::DEPARTMENT[1],//8
        ],[
            'name' => 'robinets pour douche',
            'department' => Category::DEPARTMENT[1],//9
        ],[
            'name' => 'accessoires de robinetterie',
            'department' => Category::DEPARTMENT[1],//10
        ],[
            'name' => 'traitement de l’air',
            'department' => Category::DEPARTMENT[1],//11
        ],[
            'name' => 'éclairage de salle de bain',
            'department' => Category::DEPARTMENT[2],//12
        ],[
            'name' => 'ampoules',
            'department' => Category::DEPARTMENT[2],//13
        ],[
            'name' => 'gaines et câbles électriques',
            'department' => Category::DEPARTMENT[3],//14
        ],[
            'name' => 'interrupteurs et prises',
            'department' => Category::DEPARTMENT[3],//15
        ],[
            'name' => 'carrelage  et mosaïque du sol',
            'department' => Category::DEPARTMENT[4],//16
        ],[
            'name' => 'carrelage et mosaïque des murs',
            'department' => Category::DEPARTMENT[4],//17
        ],[
            'name' => 'préparation des supports',
            'department' => Category::DEPARTMENT[4],//18
        ],[
            'name' => 'peinture intérieure',
            'department' => Category::DEPARTMENT[4],//19
        ],[
            'name' => 'outils du plombier',
            'department' => Category::DEPARTMENT[5],//20
        ],[
            'name' => 'outils du carreleur',
            'department' => Category::DEPARTMENT[5],//21
        ],[
            'name' => 'équipements de protection',
            'department' => Category::DEPARTMENT[5],//22
        ],
    ];

    public function load(ObjectManager $manager): void
    {
        foreach (self::CATEGORIES as $key => $categories) {
            $category = new Category();
            $category->setName($categories['name']);
            $category->setDepartment($categories['department']);
            $manager->persist($category);
            $this->addReference('category_' . $key, $category);
        }
        $manager->flush();
    }
}
