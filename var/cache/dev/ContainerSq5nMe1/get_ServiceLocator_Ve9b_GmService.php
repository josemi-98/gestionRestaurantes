<?php

namespace ContainerSq5nMe1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ve9b_GmService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ve9b.Gm' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ve9b.Gm'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'restaurante' => ['privates', '.errored..service_locator.ve9b.Gm.App\\Entity\\Restaurante', NULL, 'Cannot autowire service ".service_locator.ve9b.Gm": it needs an instance of "App\\Entity\\Restaurante" but this type has been excluded in "config/services.yaml".'],
        ], [
            'restaurante' => 'App\\Entity\\Restaurante',
        ]);
    }
}
