<?php

namespace ContainerSq5nMe1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRestauranteCrudControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\RestauranteCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\RestauranteCrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'easycorp'.\DIRECTORY_SEPARATOR.'easyadmin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Contracts'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'CrudControllerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'easycorp'.\DIRECTORY_SEPARATOR.'easyadmin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractCrudController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'Admin'.\DIRECTORY_SEPARATOR.'RestauranteCrudController.php';

        $container->services['App\\Controller\\Admin\\RestauranteCrudController'] = $instance = new \App\Controller\Admin\RestauranteCrudController();

        $instance->setContainer(($container->privates['.service_locator.xVd.0UA'] ?? $container->load('get_ServiceLocator_XVd_0UAService'))->withContext('App\\Controller\\Admin\\RestauranteCrudController', $container));

        return $instance;
    }
}
