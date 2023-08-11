<?php

namespace ContainerE9wem98;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrineMongodb_Odm_ContainerRepositoryFactoryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'doctrine_mongodb.odm.container_repository_factory' shared service.
     *
     * @return \Doctrine\Bundle\MongoDBBundle\Repository\ContainerRepositoryFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'mongodb-odm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ODM'.\DIRECTORY_SEPARATOR.'MongoDB'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'RepositoryFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'mongodb-odm-bundle'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ContainerRepositoryFactory.php';

        return $container->privates['doctrine_mongodb.odm.container_repository_factory'] = new \Doctrine\Bundle\MongoDBBundle\Repository\ContainerRepositoryFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Repository\\ApiRepository' => ['privates', 'App\\Repository\\ApiRepository', 'getApiRepositoryService', true],
            'App\\Repository\\GroupRepository' => ['privates', 'App\\Repository\\GroupRepository', 'getGroupRepositoryService', true],
            'App\\Repository\\GuestRepository' => ['privates', 'App\\Repository\\GuestRepository', 'getGuestRepositoryService', true],
            'App\\Repository\\UserRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'App\\Repository\\ApiRepository' => '?',
            'App\\Repository\\GroupRepository' => '?',
            'App\\Repository\\GuestRepository' => '?',
            'App\\Repository\\UserRepository' => '?',
        ]));
    }
}
