<?php

namespace ContainerWdDPoWO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_V6S6VmeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.v6S6Vme' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.v6S6Vme'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\HomeController::home' => ['privates', '.service_locator.1SAQrwH', 'get_ServiceLocator_1SAQrwHService', true],
            'App\\Controller\\LoginController::login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\RecipeDetailPageController::showRecipe' => ['privates', '.service_locator.U6P4FEZ', 'get_ServiceLocator_U6P4FEZService', true],
            'App\\Controller\\RecipesController::newRecipe' => ['privates', '.service_locator.1SAQrwH', 'get_ServiceLocator_1SAQrwHService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.V6D1oJY', 'get_ServiceLocator_V6D1oJYService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\HomeController:home' => ['privates', '.service_locator.1SAQrwH', 'get_ServiceLocator_1SAQrwHService', true],
            'App\\Controller\\LoginController:login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\RecipeDetailPageController:showRecipe' => ['privates', '.service_locator.U6P4FEZ', 'get_ServiceLocator_U6P4FEZService', true],
            'App\\Controller\\RecipesController:newRecipe' => ['privates', '.service_locator.1SAQrwH', 'get_ServiceLocator_1SAQrwHService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.V6D1oJY', 'get_ServiceLocator_V6D1oJYService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\HomeController::home' => '?',
            'App\\Controller\\LoginController::login' => '?',
            'App\\Controller\\RecipeDetailPageController::showRecipe' => '?',
            'App\\Controller\\RecipesController::newRecipe' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\HomeController:home' => '?',
            'App\\Controller\\LoginController:login' => '?',
            'App\\Controller\\RecipeDetailPageController:showRecipe' => '?',
            'App\\Controller\\RecipesController:newRecipe' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}