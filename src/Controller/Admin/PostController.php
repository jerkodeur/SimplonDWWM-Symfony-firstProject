<?php

namespace App\Controller\Admin;

use App\Entity\Post;
use App\Form\PostType;
use App\Repository\PostRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/post', name: 'admin_post_')]
class PostController extends AbstractController
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    #[Route("/list", name: 'list')]
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
            $this->em->persist($post);                                        // Persistance des données de la nouvelle catégorie en BDD (INSERT ou UPDATE)
            $this->em->flush();                                               // Effectuer la transaction (vérifie que tout se passe bien, sinon annule la transaction)
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
        if ($form->isSubmitted() && $form->isValid()) {
            $this->em->persist($post);
            $this->em->flush();
            $this->addFlash('success', 'L\'article à bien été mise à jour');

            return $this->redirectToRoute('admin_post_list');
        }

        return $this->render('admin/post/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/activate/{id<\d+>}', name: 'activate', methods: ['GET', 'POST'])]
    public function Activate(Request $request, Post $post): Response
    {
        $post->setActive(!$post->getActive());

        $this->em->persist($post);
        $this->em->flush();

        return new Response("modify");
    }

    #[Route('/delete/{id<\d+>}', name: 'delete')]
    public function deletePost(Post $post): Response
    {
        if (!$this->isGranted('ROLE_SUPER_ADMIN')) {
            $this->addFlash('error', 'Vous ne disposez pas des droits pour supprimer un article !');
        } else {
            $this->em->remove($post);
            $this->em->flush();

            $this->addFlash('success', 'L\'article à bien été supprimé');
        }

        return $this->redirectToRoute('admin_post_list');
    }
}
