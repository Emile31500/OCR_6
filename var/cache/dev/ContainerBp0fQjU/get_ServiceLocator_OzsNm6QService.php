<?php

namespace ContainerBp0fQjU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OzsNm6QService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ozsNm6Q' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ozsNm6Q'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'authenticator' => ['privates', 'App\\Security\\Authenticator', 'getAuthenticatorService', true],
            'mailerInterface' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
            'userAuthenticator' => ['privates', 'security.user_authenticator', 'getSecurity_UserAuthenticatorService', true],
            'utilisateurRepo' => ['privates', 'App\\Repository\\UtilisateurRepository', 'getUtilisateurRepositoryService', true],
        ], [
            'authenticator' => 'App\\Security\\Authenticator',
            'mailerInterface' => '?',
            'userAuthenticator' => '?',
            'utilisateurRepo' => 'App\\Repository\\UtilisateurRepository',
        ]);
    }
}