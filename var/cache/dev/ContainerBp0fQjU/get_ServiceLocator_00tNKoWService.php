<?php

namespace ContainerBp0fQjU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_00tNKoWService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.00tNKoW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.00tNKoW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'authorizationChecker' => ['privates', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
            'figureRepo' => ['privates', 'App\\Repository\\FigureRepository', 'getFigureRepositoryService', true],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'authorizationChecker' => '?',
            'figureRepo' => 'App\\Repository\\FigureRepository',
            'manager' => '?',
        ]);
    }
}
