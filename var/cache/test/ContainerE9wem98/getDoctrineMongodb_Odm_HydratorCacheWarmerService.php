<?php

namespace ContainerE9wem98;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrineMongodb_Odm_HydratorCacheWarmerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'doctrine_mongodb.odm.hydrator_cache_warmer' shared service.
     *
     * @return \Doctrine\Bundle\MongoDBBundle\CacheWarmer\HydratorCacheWarmer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'CacheWarmer'.\DIRECTORY_SEPARATOR.'CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'mongodb-odm-bundle'.\DIRECTORY_SEPARATOR.'CacheWarmer'.\DIRECTORY_SEPARATOR.'HydratorCacheWarmer.php';

        return $container->privates['doctrine_mongodb.odm.hydrator_cache_warmer'] = new \Doctrine\Bundle\MongoDBBundle\CacheWarmer\HydratorCacheWarmer($container);
    }
}
