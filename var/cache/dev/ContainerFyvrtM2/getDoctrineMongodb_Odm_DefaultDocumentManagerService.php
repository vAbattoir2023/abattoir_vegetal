<?php

namespace ContainerFyvrtM2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrineMongodb_Odm_DefaultDocumentManagerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'doctrine_mongodb.odm.default_document_manager' shared service.
     *
     * @return \Doctrine\ODM\MongoDB\DocumentManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'mongodb-odm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ODM'.\DIRECTORY_SEPARATOR.'MongoDB'.\DIRECTORY_SEPARATOR.'DocumentManager.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'mongodb-odm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ODM'.\DIRECTORY_SEPARATOR.'MongoDB'.\DIRECTORY_SEPARATOR.'Configuration.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'mongodb-odm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ODM'.\DIRECTORY_SEPARATOR.'MongoDB'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'Driver'.\DIRECTORY_SEPARATOR.'CompatibilityAnnotationDriver.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'mongodb-odm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ODM'.\DIRECTORY_SEPARATOR.'MongoDB'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'Driver'.\DIRECTORY_SEPARATOR.'AnnotationDriver.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'mongodb-odm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ODM'.\DIRECTORY_SEPARATOR.'MongoDB'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'Driver'.\DIRECTORY_SEPARATOR.'AttributeDriver.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'mongodb-odm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ODM'.\DIRECTORY_SEPARATOR.'MongoDB'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'RepositoryFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'mongodb-odm-bundle'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ContainerRepositoryFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'mongodb-odm-bundle'.\DIRECTORY_SEPARATOR.'ManagerConfigurator.php';

        $a = new \Doctrine\ODM\MongoDB\Configuration();

        $b = new \Doctrine\Persistence\Mapping\Driver\MappingDriverChain();
        $b->addDriver(new \Doctrine\ODM\MongoDB\Mapping\Driver\AttributeDriver([0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Document')]), 'App\\Document');

        $a->setDocumentNamespaces(['App' => 'App\\Document']);
        $a->setMetadataCache(new \Symfony\Component\Cache\Adapter\ArrayAdapter());
        $a->setMetadataDriverImpl($b);
        $a->setProxyDir(($container->targetDir.''.'/doctrine/odm/mongodb/Proxies'));
        $a->setProxyNamespace('MongoDBODMProxies');
        $a->setAutoGenerateProxyClasses(2);
        $a->setHydratorDir(($container->targetDir.''.'/doctrine/odm/mongodb/Hydrators'));
        $a->setHydratorNamespace('Hydrators');
        $a->setAutoGenerateHydratorClasses(1);
        $a->setDefaultDB($container->getEnv('resolve:MONGODB_DB'));
        $a->setDefaultCommitOptions([]);
        $a->setDefaultDocumentRepositoryClassName('Doctrine\\ODM\\MongoDB\\Repository\\DocumentRepository');
        $a->setDefaultGridFSRepositoryClassName('Doctrine\\ODM\\MongoDB\\Repository\\DefaultGridFSRepository');
        $a->setPersistentCollectionDir(($container->targetDir.''.'/doctrine/odm/mongodb/PersistentCollections'));
        $a->setPersistentCollectionNamespace('PersistentCollections');
        $a->setAutoGeneratePersistentCollectionClasses(0);
        $a->setRepositoryFactory(new \Doctrine\Bundle\MongoDBBundle\Repository\ContainerRepositoryFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Repository\\ApiRepository' => ['privates', 'App\\Repository\\ApiRepository', 'getApiRepositoryService', true],
            'App\\Repository\\GroupRepository' => ['privates', 'App\\Repository\\GroupRepository', 'getGroupRepositoryService', true],
            'App\\Repository\\GuestRepository' => ['privates', 'App\\Repository\\GuestRepository', 'getGuestRepositoryService', true],
            'App\\Repository\\UserRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'App\\Repository\\ApiRepository' => '?',
            'App\\Repository\\GroupRepository' => '?',
            'App\\Repository\\GuestRepository' => '?',
            'App\\Repository\\UserRepository' => '?',
        ])));

        $container->services['doctrine_mongodb.odm.default_document_manager'] = $instance = \Doctrine\ODM\MongoDB\DocumentManager::create(($container->services['doctrine_mongodb.odm.default_connection'] ?? $container->load('getDoctrineMongodb_Odm_DefaultConnectionService')), $a, new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($container));

        (new \Doctrine\Bundle\MongoDBBundle\ManagerConfigurator([]))->configure($instance);

        return $instance;
    }
}
