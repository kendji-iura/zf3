<?php

namespace Blog;

use Blog\Controller\BlogController;
use Zend\ServiceManager\Factory\InvokableFactory;

 
return [

    'controllers' => [
        'factories' => [
            #BlogController::class => InvokableFactory::class
        ]
    ],
    
    'router' => [
        'routes'=> [
            'post'=> [
                'type'=> 'segment',
                'options'=> [
                    'route'=> '/blog[/:action[/:id]]',
                    'constraints'=> [
                        'action'=> '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'=> '[0-9]+',
                    ],
                    'defaults'=> [
                        'controller'=> BlogController::class,
                        'action'=> 'index'
                    ]
                ]
                
            ]
        ]

    ],

    'view_manager'=> [
        'template_path_stack' => [
            'blog' => __DIR__ . '/../view',
        ]
    ],


];
