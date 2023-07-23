<?php

namespace ContainerFyvrtM2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XawkWJgService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.xawkWJg' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.xawkWJg'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'user' => ['privates', 'App\\Document\\User', 'getUserService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'user' => 'App\\Document\\User',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
