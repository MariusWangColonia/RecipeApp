<?php

namespace ContainerWdDPoWO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRecipesControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\RecipesController' shared autowired service.
     *
     * @return \App\Controller\RecipesController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/RecipesController.php';

        $container->services['App\\Controller\\RecipesController'] = $instance = new \App\Controller\RecipesController();

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\RecipesController', $container));

        return $instance;
    }
}
