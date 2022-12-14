<?php

namespace App\Controller;

use App\Entity\Recipes;
use App\Repository\RecipesRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RecipeDetailPageController extends AbstractController
{
    /**
     * @param   $id
     * @param   EntityManagerInterface $entityManager
     * @param   RecipesRepository $recipesRepository
     * @return  Response
     */
    #[Route('/home/recipe/{id}')]
    public function showRecipe($id, EntityManagerInterface $entityManager, RecipesRepository $recipesRepository, UserRepository $userRepository) : Response
    {
        $user = $this->getUser()->getUserIdentifier();
        $username = $userRepository->findBy(array('username' => $user));
        $userId = $username[0]->getId();

        $recipe = $entityManager->getRepository(Recipes::class)->find($id);


        if ($recipe->userId != intval($userId)) {
            dd("Halo");
        } else {
            return $this->render('recipes/recipeDetailpage.html.twig', [
                'recipe'   =>  $recipe,
            ]);
        }
    }
}
