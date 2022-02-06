<?php


namespace App\classes;
use App\classes\person;

class Example extends person
{
    public $firstName;
    protected $middleName;
    private  $lastName;
    public $firstNumber = 10;
    protected $secondNumber = 20;
    private $lastNumber = 30;

    public function index()
    {
//        $this->firstName = "Tushar";
//        $this->firstName = "Nirob";
////        echo gettype($this->firstName);
        $this->firstName = "MD";
        echo $this->firstName;
    }
    public function methodOne()
    {
        $this->middleName= 'Alamin';
        echo $this->middleName;
    }
    public function methodTwo()
    {
        $this->lastName='Tushar';
        echo $this->lastName;

    }
    public function methodThree()
    {
        echo$this->district;
//        echo$this->division;
//        echo$this->country;

//        $this->district();
//        $this->division();
//        $this->country();

    }
}

