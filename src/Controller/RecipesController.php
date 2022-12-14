<?php

namespace App\Controller;

use App\Entity\Recipes;
use App\Entity\User;
use App\Form\RecipeType;
use App\Repository\RecipesRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RecipesController extends AbstractController
{

    #[Route('/home/new-recipe')]
    public function newRecipe(UserRepository $repository, Request $request, EntityManagerInterface $entityManager) : Response
    {

        $user = $this->getUser()->getUserIdentifier();
        $username = $repository->findBy(array('username' => $user));
        $userId = $username[0]->getId();

        $recipe = new Recipes();
        $recipe->setUserId($userId);

        $form = $this->createForm(RecipeType::class, $recipe);
        try {
            $form->handleRequest($request);
        } catch (\Exception $e) {
            echo "failed :".$e->getMessage();
        }
        if ($form->isSubmitted() && $form->isValid()) {
            $form->getData();
            $entityManager->persist($recipe);
            $entityManager->flush();
            return $this->redirect('/home');
        }

        return $this->render('recipes/recipeForm.html.twig', [
            'form' => $form,
        ]);
    }
}
