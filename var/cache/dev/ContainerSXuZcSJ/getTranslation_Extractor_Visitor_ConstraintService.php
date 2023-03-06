<?php

namespace ContainerSXuZcSJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTranslation_Extractor_Visitor_ConstraintService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'translation.extractor.visitor.constraint' shared service.
     *
     * @return \Symfony\Component\Translation\Extractor\Visitor\ConstraintVisitor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Extractor'.\DIRECTORY_SEPARATOR.'Visitor'.\DIRECTORY_SEPARATOR.'AbstractVisitor.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nikic'.\DIRECTORY_SEPARATOR.'php-parser'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'PhpParser'.\DIRECTORY_SEPARATOR.'NodeVisitor.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Extractor'.\DIRECTORY_SEPARATOR.'Visitor'.\DIRECTORY_SEPARATOR.'ConstraintVisitor.php';

        return $container->privates['translation.extractor.visitor.constraint'] = new \Symfony\Component\Translation\Extractor\Visitor\ConstraintVisitor([0 => 'Expression', 1 => 'Email', 2 => 'NotCompromisedPassword', 3 => 'When', 4 => 'UniqueEntity', 5 => 'UserPassword']);
    }
}
