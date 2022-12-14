<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LandingPageController extends AbstractController
{

    #[Route('/')]
    public function showLandingPage()
    {
        return $this->render('recipes/landingPage.html.twig');
    }
}
