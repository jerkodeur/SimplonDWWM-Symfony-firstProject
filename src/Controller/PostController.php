<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/', name: 'post_')]
class PostController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function home(): Response
    {
        return $this->render('post/index.html.twig', [
            'controller_name' => 'PostController',
        ]);
    }

    #[Route('/post/{id<\d+>}', name: 'view')]
    public function view(int $id): Response
    {
        return $this->render('post/view.html.twig', [
            'controller_name' => 'PostController',
            'id' => $id
        ]);
    }
}
