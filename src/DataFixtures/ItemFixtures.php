<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use App\Entity\Item;

class ItemFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $item = new Item;
        $item->setName('Baignoire 160x70 CORVETTE');
        $item->setPrice(141,82);
        $item->setQuantity(rand(1,5));
        $item->setDescription('Baignoire 160x70 CORVETTE, à encastrer de forme rectangulaire - couleur : blanc - matière : acrylique - garantie : 10 ans');
        $item->addCategory($this->getReference('category_0'));
        $item->setPicture('https://cdn.manomano.com/images/images_products/862229/T/4311571_1.jpg');
        $this->addReference('item_0' , $item);
        $manager->persist($item);

        $item = new Item;
        $item->setName('Carrelage marbré 60x60cm BALMORAL TAUPE');
        $item->setPrice(37.42);
        $item->setQuantity(rand(1,5));
        $item->setDescription('Carrelage brillant en grès céram imitation marbre');
        $item->addCategory($this->getReference('category_16'));
        $item->setPicture('https://cdn.manomano.com/images/images_products/555685/T/16778591_2.jpg');
        $this->addReference('item_1', $item);
        $manager->persist($item);

        $item = new Item;
        $item->setName('baignoire RAVAK AVOCADO 150cm');
        $item->setPrice(139.80);
        $item->setQuantity(rand(1,5));
        $item->setDescription('Baignoire acrylique - garantie : 10 ans.');
        $item->addCategory($this->getReference('category_0'));
        $item->setPicture('https://cdn.manomano.com/images/images_products/646923/T/32387691_1.jpg');
        $this->addReference('item_2', $item);
        $manager->persist($item);

        $item = new Item;
        $item->setName('Vasque SWISS AQUATECHNOLOGIES');
        $item->setPrice(109.90);
        $item->setQuantity(rand(1,5));
        $item->setDescription('Vasque ronde à poser - hauteur : 12cm - diamètre : 36cm - finition : brillant');
        $item->addCategory($this->getReference('category_2'));
        $item->setPicture('https://cdn.manomano.com/images/images_products/5071444/T/33159713_1.jpg');
        $this->addReference('item_3', $item);
        $manager->persist($item);

        $item = new Item;
        $item->setName('Lavabo en pierre de rivière ovale');
        $item->setPrice(86.39);
        $item->setQuantity(rand(1,5));
        $item->setDescription('Lavabo ovale en pierre - diamètre : 45cm - couleur : pierre - garantie : 2 ans ');
        $item->addCategory($this->getReference('category_2'));
        $item->setPicture('https://cdn.manomano.com/images/images_products/272650/T/18754912_1.jpg');
        $this->addReference('item_4', $item);
        $manager->persist($item);

        $item = new Item;
        $item->setName('Marteau BOUCHARD 40mm');
        $item->setPrice(63.24);
        $item->setQuantity(rand(1,5));
        $item->setDescription('Marteau manche en bois - poids : 1.5kg');
        $item->addCategory($this->getReference('category_21'));
        $item->setPicture('https://cdn.manomano.com/images/images_products/149211/T/1342183_1.jpg');
        $this->addReference('item_5', $item);
        $manager->persist($item);

        $item = new Item;
        $item->setName('Peigne denté FORTIS');
        $item->setPrice(10.99);
        $item->setQuantity(rand(1,5));
        $item->setDescription('Peigne denté de 28cm de long et 13cm de largeur. Manche en bois vernis ');
        $item->addCategory($this->getReference('category_21'));
        $item->setPicture('https://cdn.manomano.com/images/images_products/362941/T/4936856_1.jpg');
        $this->addReference('item_6', $item);
        $manager->persist($item);

        $item = new Item;
        $item->setName('Coupe-carrelage COSTAWAY');
        $item->setPrice(109.99);
        $item->setQuantity(rand(1,5));
        $item->setDescription('Coupe-carrelage manuel, angle d\'inclinaison maximum 60 degrés. Equipé d\'une règle de précision');
        $item->addCategory($this->getReference('category_21'));
        $item->setPicture('https://cdn.manomano.com/images/images_products/5380911/T/16894968_1.jpg');
        $this->addReference('item_7', $item);
        $manager->persist($item);

        $item = new Item;
        $item->setName('Plafonnier LED 13w');
        $item->setPrice(16.99);
        $item->setQuantity(rand(1,5));
        $item->setDescription('Plafonnier blanc à intensité variable - diamètre : 29cm');
        $item->addCategory($this->getReference('category_12'));
        $item->setPicture('https://cdn.manomano.com/images/images_products/5871919/T/16358435_1.jpg');
        $this->addReference('item_8', $item);
        $manager->persist($item);

        $item = new Item;
        $item->setName('Plafonnier LED carré');
        $item->setPrice(24.99);
        $item->setQuantity(rand(1,5));
        $item->setDescription('Plafonnier LED carré 29cm , classe énergétique A , plafonnier style design/moderne');
        $item->addCategory($this->getReference('category_12'));
        $item->setPicture('https://cdn.manomano.com/images/images_products/5871919/T/20408594_1.jpg');
        $this->addReference('item_9', $item);
        $manager->persist($item);

        $manager->flush();
    }
}
