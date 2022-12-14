<?php

namespace App\Controller;

use App\Entity\Recipes;
use App\Entity\User;
use App\Repository\RecipesRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class HomeController extends AbstractController
{

    /**
     * @param EntityManagerInterface $entityManager
     * @param UserRepository $repository
     * @return Response
     */
    #[Route('/home')]
    public function home(EntityManagerInterface $entityManager, UserRepository $repository) : Response
    {

        $user = $this->getUser()->getUserIdentifier();
        $username = $repository->findBy(array('username' => $user));
        $userId = $username[0]->getId();

        $recipe = $entityManager->getRepository(Recipes::class)->findBy(array('userId' => $userId));

        return $this->render('recipes/home.html.twig', [
            'username'  =>  $user,
            'userId'    =>  $userId,
            'recipes'   =>  $recipe,
        ]);
    }
}
