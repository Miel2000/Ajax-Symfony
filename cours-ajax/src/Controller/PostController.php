<?php

namespace App\Controller;

use App\Entity\Post;
use App\Entity\PostLike;
use App\Repository\PostRepository;
use App\Repository\PostLikeRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PostController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index(PostRepository $repo)
    {
        return $this->render('post/index.html.twig', [
            'posts' => $repo->findAll(),
        ]);
    }


    /**
     * Route permettant  de liker ou unliker un article
     * 
     * @Route("/post/{id}/like", name="post_like")
     * 
     */
    public function like(Post $post, ObjectManager $manager, PostLikeRepository $likeRepo) :Response
    {

        $user = $this->getUser();
    // on verifie si le user est conecté
        if(!$user) return $this->json([
            'code' => 403,
            'message' => "Vous n'etes pas connecté"
        ],403);
// si le post en question est déjà liker
    if($post->isLikedByUser($user)){
        // on attrape avec le repo le like en question
        $like = $likeRepo->findOneBy([
            'post' => $post,
            'user' => $user
            ]);
        //ducoup, aprés on s'adresse au manager, on lui dit : vire ce like 
        $manager->remove($like);
        $manager->flush();

        return $this->json([
            'code' => 200,
            'message' => 'Like bien supprimed',
            'likes' => $likeRepo->count(['post' => $post])
            ], 200);
        }


        $like = new PostLike();
        $like->setPost($post)
             ->setUser($user);

        $manager->persist($like);
        $manager->flush();

        // au lieu de faire un render d'une page html.twig, on fait (un tableau des data ET un code http) , un 'status'
        return $this->json([
            'code' => 200,
            'message' => 'Ca marche bien',
            'likes' => $likeRepo->count(['post' => $post])
        ],200);
    }

}
