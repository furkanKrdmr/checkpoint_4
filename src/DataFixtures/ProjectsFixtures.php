<?php

namespace App\DataFixtures;

use App\Entity\Projects;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProjectsFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $projects = new Projects();

        $projects->setTitle('Pimp Agency');
        $projects->setDescription('Un site qui a pour but de proposer aux clients la customisation de moto en direct et générer un devis.');
        $projects->setImageurl('https://cdn.pixabay.com/photo/2021/06/29/07/35/woman-6373424_1280.jpg');
         $manager->persist($projects);

        $manager->flush();
    }
}
