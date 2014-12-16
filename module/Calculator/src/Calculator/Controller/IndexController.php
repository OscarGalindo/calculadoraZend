<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Calculator\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Calculator\Model\CalculatorModel;
use Calculator\Form\CalculatorForm as CalcForm;

class IndexController extends AbstractActionController
{
    private $calc;

    function __construct(CalculatorModel $calc)
    {
        $this->calc = $calc;
    }

    public function indexAction()
    {
        $form = new CalcForm();
        return array(
            'mensaje' => 'Calculator Controller - Index Action',
            'form' => $form
        );
    }

    public function addAction()
    {

    }
}
