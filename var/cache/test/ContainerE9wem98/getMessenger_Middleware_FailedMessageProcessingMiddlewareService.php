<?php

namespace ContainerE9wem98;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_Middleware_FailedMessageProcessingMiddlewareService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'messenger.middleware.failed_message_processing_middleware' shared service.
     *
     * @return \Symfony\Component\Messenger\Middleware\FailedMessageProcessingMiddleware
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'messenger'.\DIRECTORY_SEPARATOR.'Middleware'.\DIRECTORY_SEPARATOR.'MiddlewareInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'messenger'.\DIRECTORY_SEPARATOR.'Middleware'.\DIRECTORY_SEPARATOR.'FailedMessageProcessingMiddleware.php';

        return $container->privates['messenger.middleware.failed_message_processing_middleware'] = new \Symfony\Component\Messenger\Middleware\FailedMessageProcessingMiddleware();
    }
}
