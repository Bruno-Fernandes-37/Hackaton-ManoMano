<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use App\Entity\Project;

class ProjectFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $project = new Project();
        $project->setTitle('Salle de bain');
        for ($i = 0 ; $i<9 ; $i++) {
            $project->addItem($this->getReference('item_' . $i));
        }
        $manager->persist($project);
        $manager->flush();
    }

    public function getDependencies()
    {
        return [ItemFixtures::class];
    }
}
