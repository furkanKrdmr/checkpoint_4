<?php

namespace App\DataFixtures;

use App\Entity\Admin;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AdminFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $admin = new User();
        $admin->setEmail('furkan@gmail.com');
        $admin->setPassword('furkan');
        $admin->setRoles(['ROLES_ADMIN']);
        $admin->isVerified(true);
        
        
        $manager->persist($admin);

        $manager->flush();
    }
}
