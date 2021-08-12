<?php

namespace App\Controller;

use App\Entity\Post;
use App\Form\PostType;
use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/', name: 'post_')]
class PostController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function home(PostRepository $postRepository): Response
    {
        return $this->render('post/index.html.twig', [
            'posts' => $postRepository->findLastPosts(),
            'oldPosts' => array_reverse($postRepository->findOldPosts())
        ]);
    }

    #[Route('/post/{slug}', name: 'show')]
    public function show(Post $post, PostRepository $postRepository): Response
    {
        return $this->render('post/show.html.twig', [
            'post' => $post,
            'oldPosts' => $postRepository->findOldPosts()
        ]);
    }

}
