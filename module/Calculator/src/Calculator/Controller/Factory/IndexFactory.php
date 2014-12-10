<?php
/**
 * Created by PhpStorm.
 * User: kaseOga
 * Date: 10/12/14
 * Time: 16:57
 */

namespace Calculator\Controller\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Calculator\Controller\IndexController as CalcCtrl;

class IndexFactory implements FactoryInterface {

    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $sm = $serviceLocator->getServiceLocator();
        $model = $sm->get('CalculatorModel');
        return new CalcCtrl($model);
    }
}