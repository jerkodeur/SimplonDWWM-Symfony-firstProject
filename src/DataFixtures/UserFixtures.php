<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    private $userPasswordEncoder;

    public function __construct(UserPasswordHasherInterface $userPasswordEncoder)
    {
        $this->userPasswordEncoder = $userPasswordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $user = new User;
        $user->setEmail('user@user.fr');
        $user->setRoles(['ROLE_USER']);
        $user->setPassword($this->userPasswordEncoder->hashPassword($user, 'password12345'));
        $this->addReference('user', $user);

        $manager->persist($user);

        $user = new User;
        $user->setEmail('admin@admin.fr');
        $user->setRoles(['ROLE_ADMIN']);
        $user->setPassword($this->userPasswordEncoder->hashPassword($user, 'password12345'));
        $this->addReference('admin', $user);

        $manager->persist($user);

        $user = new User;
        $user->setEmail('jerome.potie@gmail.com');
        $user->setRoles(['ROLE_SUPER_ADMIN']);
        $user->setPassword($this->userPasswordEncoder->hashPassword($user, $_ENV['SUPER_ADMIN_PASSWORD']));
        $this->addReference('superadmin', $user);

        $manager->persist($user);

        $manager->flush();
    }
}
