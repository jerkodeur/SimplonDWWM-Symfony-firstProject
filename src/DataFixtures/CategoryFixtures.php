<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $categories = [
            'Action',
            'Fantaisie',
            'Société',
            'FPS',
            'Historique',
            'Horreur'
        ];

        foreach($categories as $cat_title) {
            $category = new Category();
            $category->setName($cat_title);

            $this->addReference($cat_title, $category);

            $manager->persist($category);
        }

        $manager->flush();
    }
}
