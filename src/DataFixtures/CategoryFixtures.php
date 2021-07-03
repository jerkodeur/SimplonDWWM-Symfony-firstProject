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
            'Fantasy',
            'Société',
            'FPS',
            'Historique',
            'Horreur'
        ];

        foreach($categories as $index => $cat_title) {
            $category = new Category();
            $category->setName($categories[$index]);
            $manager->persist($category);
        }

        $manager->flush();
    }
}
