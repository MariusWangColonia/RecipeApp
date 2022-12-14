<?php

namespace ContainerJQz8lgn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_U6P4FEZService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.U6P4FEZ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.U6P4FEZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'recipesRepository' => ['privates', 'App\\Repository\\RecipesRepository', 'getRecipesRepositoryService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'entityManager' => '?',
            'recipesRepository' => 'App\\Repository\\RecipesRepository',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
