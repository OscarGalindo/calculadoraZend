<?php
/**
 * Created by PhpStorm.
 * User: kaseOga
 * Date: 10/12/14
 * Time: 18:20
 */

namespace Calculator\Form;

use Zend\Form\Form;

class CalculatorForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('calculator');

        $this->setAttributes(array(
            'class' => 'form-horizontal',
        ));

        $this->add(array(
            'name' => 'op1',
            'type' => 'Text',
            'options' => array(
                'label' => 'Operador 1',
                'label_attributes' => array(
                    'class' => 'col-sm-2 control-label',
                ),
            ),
            'attributes' => array(
                'class' => 'form-control',
                'placeholder' => 'Operador 1',
                'id' => 'op1',
                'required' => 'required',
                'type' => 'number',
            ),
        ));

        $this->add(array(
            'name' => 'op2',
            'type' => 'Text',
            'options' => array(
                'label' => 'Operador 2',
                'label_attributes' => array(
                    'class' => 'col-sm-2 control-label',
                ),
            ),
            'attributes' => array(
                'class' => 'form-control',
                'placeholder' => 'Operador 2',
                'id' => 'op2',
                'required' => 'required',
                'type' => 'number',
            ),
        ));

        $this->add(array(
            'name' => 'calc',
            'type' => 'Submit',
            'attributes' => array(
                'id' => 'submitbutton',
                'value' => 'Calcular',
                'class' => 'btn btn-default'
            ),
        ));
    }
} 