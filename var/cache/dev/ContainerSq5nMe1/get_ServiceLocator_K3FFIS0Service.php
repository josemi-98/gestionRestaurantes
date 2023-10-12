<?php

namespace ContainerSq5nMe1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_K3FFIS0Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.K3FFIS0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.K3FFIS0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'opinion' => ['privates', '.errored..service_locator.K3FFIS0.App\\Entity\\Opinion', NULL, 'Cannot autowire service ".service_locator.K3FFIS0": it needs an instance of "App\\Entity\\Opinion" but this type has been excluded in "config/services.yaml".'],
            'opinionRepository' => ['privates', 'App\\Repository\\OpinionRepository', 'getOpinionRepositoryService', true],
        ], [
            'opinion' => 'App\\Entity\\Opinion',
            'opinionRepository' => 'App\\Repository\\OpinionRepository',
        ]);
    }
}
