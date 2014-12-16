<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

return array(
    'router' => array(
        'routes' => array(
            'calc' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/calc',
                    'defaults' => array(
                        'controller' => 'CalculatorFact',
                        'action'     => 'index',
                    ),
                ),
            ),
            'add' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/calc/add',
                    'defaults' => array(
                        'controller' => 'CalculatorFact',
                        'action'     => 'add',
                    ),
                ),
            ),
            'doAdd' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/calc/doAdd',
                    'defaults' => array(
                        'controller' => 'CalculatorFact',
                        'action'     => 'doAdd',
                    ),
                ),
            ),
            'subtract' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/calc/subtract',
                    'defaults' => array(
                        'controller' => 'CalculatorFact',
                        'action'     => 'subtract',
                    ),
                ),
            ),
        ),
    ),
    'service_manager' => array(
        'abstract_factories' => array(
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory',
        ),
        'invokables' => array(
            'CalculatorModel' => 'Calculator\Model\CalculatorModel'
        ),
    ),
    'controllers' => array(
//        'invokables' => array(
//            'Calculator\Controller\Index' => 'Calculator\Controller\IndexController'
//        ),
        'factories' => array(
            'CalculatorFact' => 'Calculator\Controller\Factory\IndexFactory',
        )
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'template_map' => array(
            'calculator/index/index'  => __DIR__ . '/../view/calculator/index/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    // Placeholder for console routes
    'console' => array(
        'router' => array(
            'routes' => array(
            ),
        ),
    ),
);
