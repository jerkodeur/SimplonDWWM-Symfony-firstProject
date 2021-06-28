<?php

namespace App\Controller\Admin;

use App\Entity\Post;
use App\Form\PostType;
use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/post', name: 'admin_post_')]
class PostController extends AbstractController
{
    #[Route("/list" , name: 'list')]
    public function postList(PostRepository $postRepository): Response
    {
        return $this->render('admin/post/index.html.twig', [
            'posts' => $postRepository->findAll()
        ]);
    }

    #[Route('/add', name: 'add')]
    public function addPost(Request $request): Response
    {
        $post = new Post();                                             // Instanciation d'un nouvelle catégorie
        $form = $this->createForm(PostType::class, $post);              // Création du formulaire
        $form->handleRequest($request);                                 // Récupération des données du formulaire s'il a été rempli
        if ($form->isSubmitted() && $form->isValid()) {                 // Vérification que les données sont valides
            $post->setUser($this->getUser());
            $em = $this->getDoctrine()->getManager();                   // Récupération de l'entity manager de Doctrine
            $em->persist($post);                                        // Persistance des données de la nouvelle catégorie en BDD (INSERT ou UPDATE)
            $em->flush();                                               // Effectuer la transaction (vérifie que tout se passe bien, sinon annule la transaction)
            $this->addFlash('success', "L'article à bien été ajouté");

            return $this->redirectToRoute('admin_post_list');
        }

        return $this->render('admin/post/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/edit/{id<\d+>}', name: 'edit', methods: ['GET', 'POST'])]
    public function editPost(Request $request, Post $post): Response
    {
        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush();
            $this->addFlash('success', 'L\'article à bien été mise à jour');

            return $this->redirectToRoute('admin_post_list');
        }

        return $this->render('admin/post/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/delete/{id<\d+>}', name: 'delete')]
    public function deletePost(Post $post): Response
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($post);
        $em->flush();

        $this->addFlash('success', 'L\'articlee à bien été supprimé');

        return $this->redirectToRoute('admin_post_list');
    }
}