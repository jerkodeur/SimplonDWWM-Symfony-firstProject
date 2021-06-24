<?php

namespace App\Controller\Admin;

use App\Entity\Category;
use App\Form\CategoryType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/', name: 'category')]
class CategoryController extends AbstractController
{
    #[Route('/category/add', name: 'category_add')]
    public function addCategory(Request $request): Response
    {
        $category = new Category();                                 // Instanciation d'un nouvelle catégorie
        $form = $this->createForm(CategoryType::class, $category);  // Création du formulaire
        $form->handleRequest($request);                             // Récupération des données du formulaire s'il a été rempli
        if ($form->isSubmitted() && $form->isValid()) {             // Vérification que les données sont valides
            $em = $this->getDoctrine()->getManager();               // Récupération de l'entity manager de Doctrine
            $em->persist($category);                                // Persistance des données de la nouvelle catégorie en BDD (INSERT ou UPDATE)
            $em->flush();                                           // Effectuer la transaction (vérifie que tout se passe bien, sinon annule la transaction)
            return $this->redirectToRoute('category_add');
        }

        return $this->render('admin/category/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
