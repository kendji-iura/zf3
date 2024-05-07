<?php

namespace Blog;

use Blog\Controller\Factory\PostTableGatewayFactory;
use Blog\Controller\BlogController;
use Zend\ModuleManager\Feature\ConfigProviderInterface;

class Module implements ConfigProviderInterface, ServiceProviderInterface, ControllerProviderInterface
{
    public function getConfig()
    {
        return include __DIR__ ."/../config/module.config.php";
    }

    public function getServiceConfig()
    {
        return [

            'factories'=> [
                Model\PostTable::class => PostTableFactory::class,
                Model\PostTableGateway::class => PostTableGatewayFactory::class,
            ]
            ];
    }

    public function getControllerConfig()
    {
        return [
            'factories'=> [
                BlogController::class => BlogControllerFactory::class,
            ]
        ];
    }
}
