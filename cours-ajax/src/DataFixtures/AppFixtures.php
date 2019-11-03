<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Post;
use App\Entity\User;
use App\Entity\PostLike;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    /**
     * Encodeur de mot de passe
     *
     * @var UserPasswordEncoderInterface
     */
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();

        $user = new User();
        $user->setEmail('user@symfony.com')
            ->setPassword($this->encoder->encodePassword($user, 'password'));

        $manager->persist($user);

        // on met nos user dans un tableau vide (ca nous aidera avec le faker->randomElement pour selectioné un user plus facilement (car boucle for l++ need un user mais utilise un mt_rand())

        $users[] = $user;

        for ($i = 0; $i < 20; $i++) {
            
            $user = new User();
     

            $user->setEmail($faker->email)
            ->setPassword($this->encoder->encodePassword($user, 'password'));

            $manager->persist($user);
            $users[] = $user;
            
        }
// on crée des nouveau post avec des nouveau like a l'interieur
        for ($i = 0; $i < 20; $i++) {
            $post = new Post();
            $post->setTitle($faker->sentence(6))
                ->setIntroduction($faker->paragraph())
                ->setContent('<p>' . join(',', $faker->paragraphs()) . '</p>');

            $manager->persist($post);

            for ($l = 0; $l < mt_rand(0,10); $l++) {

                $like = new PostLike();
                $like->setPost($post)
                     ->setUser($faker->randomElement($users));
                
                $manager->persist($like);
                
            }

        }
        
        $manager->flush();
    }
}
