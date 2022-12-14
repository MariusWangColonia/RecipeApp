<?php

namespace ContainerJQz8lgn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRecipeDetailPageControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\RecipeDetailPageController' shared autowired service.
     *
     * @return \App\Controller\RecipeDetailPageController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/RecipeDetailPageController.php';

        $container->services['App\\Controller\\RecipeDetailPageController'] = $instance = new \App\Controller\RecipeDetailPageController();

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\RecipeDetailPageController', $container));

        return $instance;
    }
}