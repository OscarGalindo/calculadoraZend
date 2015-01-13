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
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    private $_calc;

    function __construct(CalculatorModel $calc)
    {
        $this->_calc = $calc;
    }

    public function indexAction()
    {
        return array(
            'mensaje' => 'Selecciona una opcion',
        );
    }

    public function addAction()
    {
        $form = new CalcForm();

        return array(
            'action' => 'Suma',
            'sign' => '+',
            'mensaje' => 'Calculator Controller - Add Action',
            'form' => $form
        );
    }

    public function subtractAction()
    {
        $form = new CalcForm();

        return array(
            'action' => 'Resta',
            'sign' => '-',
            'mensaje' => 'Calculator Controller - Sub   tract Action',
            'form' => $form
        );
    }

    public function doAddAction()
    {
        $result = new ViewModel();
        $result->setTemplate('calculator/index/response');

        $op1 = $this->getRequest()->getPost('op1');
        $op2 = $this->getRequest()->getPost('op2');

        $this->_calc->setOp1($op1);
        $this->_calc->setOp2($op2);
        $this->_calc->add();
        $resultado = $this->_calc->getResult();

        $result->setVariables(array(
            'op1' => $op1,
            'op2' => $op2,
            'sign' => '+',
            'resultado' => $resultado,
        ));

        return $result;
    }

    public function doSubtractAction()
    {
        $result = new ViewModel();
        $result->setTemplate('calculator/index/response');

        $op1 = $this->getRequest()->getPost('op1');
        $op2 = $this->getRequest()->getPost('op2');

        $this->_calc->setOp1($op1);
        $this->_calc->setOp2($op2);
        $this->_calc->subtract();
        $resultado = $this->_calc->getResult();

        $result->setVariables(array(
            'op1' => $op1,
            'op2' => $op2,
            'sign' => '-',
            'resultado' => $resultado,
        ));

        return $result;
    }
}
