<?php

namespace Calculator\Model;


class CalculatorModel
{
    private $op1;
    private $op2;
    private $result;

    function __construct()
    {
        $this->result = 0;
    }

    public function add()
    {
        $this->result = $this->op1 + $this->op2;
    }
    public function multiplication()
    {
        $this->result = $this->op1 * $this->op2;
    }
    public function division()
    {
        $this->result = $this->op1 / $this->op2;
    }
    public function subtract()
    {
        $this->result = $this->op1 - $this->op2;
    }

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @return mixed
     */
    public function getOp1()
    {
        return $this->op1;
    }

    /**
     * @param mixed $op1
     */
    public function setOp1($op1)
    {
        $this->op1 = $op1;
    }

    /**
     * @return mixed
     */
    public function getOp2()
    {
        return $this->op2;
    }

    /**
     * @param mixed $op2
     */
    public function setOp2($op2)
    {
        $this->op2 = $op2;
    }



}