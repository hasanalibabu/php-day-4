<?php


namespace App\classes;
use App\classes\User;

class Calculator
{
    public $firstNumber;
    protected $secondNumber;
    private $operator;
    public $result;
    public $user;

    public function __construct($data)
    {
       $this->firstNumber  = $data['first_number'];
       $this->secondNumber = $data['second_number'];
       $this->operator     = $data['operator'];
    }


    public function index()
    {
        switch ($this->operator)
        {
            case '+':
                $this->result = $this->add();
                break;
            case '-':
                $this->result = $this->sub();
                break;
            case '*':
                $this->result = $this->multiplication();
                break;
            case '/':
                $this->result = $this->Division();
                break;
            case '%':
                $this->result = $this->Remainder();
                break;
        }
        return $this->result;
    }


    protected function add()
    {
        return $this->firstNumber + $this->secondNumber;
    }
    protected function sub()
    {
        return $this->firstNumber - $this->secondNumber;
    }
    protected function multiplication()
    {
        return $this->firstNumber * $this->secondNumber;
    }
    protected function Division()
    {
        return $this->firstNumber / $this->secondNumber;
    }
    protected function Remainder()
    {
        return $this->firstNumber % $this->secondNumber;
    }
}