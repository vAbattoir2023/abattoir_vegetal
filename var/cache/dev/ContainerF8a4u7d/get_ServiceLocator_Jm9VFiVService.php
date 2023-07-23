<?php

namespace ContainerF8a4u7d;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Jm9VFiVService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Jm9VFiV' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Jm9VFiV'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'groupRepository' => ['privates', 'App\\Repository\\GroupRepository', 'getGroupRepositoryService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'groupRepository' => 'App\\Repository\\GroupRepository',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
