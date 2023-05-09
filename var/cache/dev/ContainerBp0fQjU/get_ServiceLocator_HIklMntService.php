<?php

namespace ContainerBp0fQjU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HIklMntService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.hIklMnt' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hIklMnt'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'figureRepository' => ['privates', 'App\\Repository\\FigureRepository', 'getFigureRepositoryService', true],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'tokenStorage' => ['privates', 'security.token_storage', 'getSecurity_TokenStorageService', false],
        ], [
            'figureRepository' => 'App\\Repository\\FigureRepository',
            'manager' => '?',
            'tokenStorage' => '?',
        ]);
    }
}
