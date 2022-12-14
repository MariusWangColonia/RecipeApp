<?php

namespace ContainerWdDPoWO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLandingPageControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\LandingPageController' shared autowired service.
     *
     * @return \App\Controller\LandingPageController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/LandingPageController.php';

        $container->services['App\\Controller\\LandingPageController'] = $instance = new \App\Controller\LandingPageController();

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\LandingPageController', $container));

        return $instance;
    }
}
