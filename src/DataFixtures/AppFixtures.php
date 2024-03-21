<?php

namespace App\DataFixtures;

use App\Entity\Blog;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
   
class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 4; ++$i) {
            $blog = new Blog(
                title: $faker->title(),
                short_description: $faker->lastName(),
                body: $faker->paragraph(2),
            );

            $manager->persist($blog);
        }

        $manager->flush();
    }
}