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
            'controller_name' => 'PostController',
            'posts' => $postRepository->findAll()
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

    #[Route('/post/add', name: 'add')]
    public function addPost(Request $request): Response
    {
        $post = new Post();
        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $post->setActive(false);
            $post->setUser($this->getUser());
            $em = $this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush();
            return $this->redirectToRoute('post_add');
        }
        // dd($request);

        return $this->render('admin/post/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
