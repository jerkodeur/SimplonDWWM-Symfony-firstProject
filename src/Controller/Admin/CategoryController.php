<?php

namespace App\Controller\Admin;

use App\Entity\Category;
use App\Form\CategoryType;
use Doctrine\DBAL\Exception;
use App\Repository\CategoryRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/admin/category', name: 'admin_category_')]
class CategoryController extends AbstractController
{
    #[Route("/list", name: 'list')]
    public function categoryList(CategoryRepository $categoryRepository): Response
    {
        return $this->render('admin/category/index.html.twig', [
            'categories' => $categoryRepository->findAll()
        ]);
    }

    #[Route('/add', name: 'add')]
    public function addCategory(Request $request): Response
    {
        $category = new Category();                                 // Instanciation d'un nouvelle catégorie
        $form = $this->createForm(CategoryType::class, $category);  // Création du formulaire
        $form->handleRequest($request);                             // Récupération des données du formulaire s'il a été rempli
        if ($form->isSubmitted() && $form->isValid()) {             // Vérification que les données sont valides
            $em = $this->getDoctrine()->getManager();               // Récupération de l'entity manager de Doctrine
            $em->persist($category);                                // Persistance des données de la nouvelle catégorie en BDD (INSERT ou UPDATE)
            $em->flush();                                           // Effectuer la transaction (vérifie que tout se passe bien, sinon annule la transaction)
            $this->addFlash('success', "La catégorie à bien été ajouté");

            return $this->redirectToRoute('admin_category_list');
        }

        return $this->render('admin/category/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/edit/{id<\d+>}', name: 'edit', methods: ['GET', 'POST'])]
    public function editCategory(Request $request, Category $category): Response
    {
        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($category);
            $em->flush();

            $this->addFlash('success', 'La catégorie à bien été mise à jour');

            return $this->redirectToRoute('admin_category_list');
        }

        return $this->render('admin/category/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/delete/{id<\d+>}', name: 'delete')]
    public function deleteCategory(Category $category): Response
    {
        if (!$this->isGranted('ROLE_SUPER_ADMIN')) {
            $this->addFlash('error', 'Vous ne disposez pas des droits pour supprimer une catégorie !');
        } else {
            try {
                $em = $this->getDoctrine()->getManager();
                $em->remove($category);
                $em->flush();
                $this->addFlash('success', 'La catégorie à bien été supprimée');
            } catch (Exception $e) {
                $code = $e->getPrevious()->getCode();
                if ($code == "23000") {
                    $this->addFlash('error', 'Impossible de supprimer la catégorie car elle est encore utilisée !');
                } else {
                    $_ENV == 'dev' ?
                        $this->addFlash('error', "Une erreur est survenue:" + $e->getPrevious()->getMessage())
                        : $this->addFlash('error', "Une erreur est survenue, code erreur:" + $code + ". Merci de bien vouloir contacter l'administrateur.");
                }
            }
        }
        return $this->redirectToRoute('admin_category_list');
    }
}
