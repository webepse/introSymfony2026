<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        for($cpt=1; $cpt<=10; $cpt++)
        {
            $product = new Product();
            $product->setTitle('Product '.$cpt)
                ->setDescription('Description lorem ipsum')
                ->setPrice(rand(10,1000))
                ->setCreateAt(new \DateTimeImmutable())
                ->setImage('https://picsum.photos/200/300');

            $manager->persist($product);
        }

        $manager->flush();
    }
}
