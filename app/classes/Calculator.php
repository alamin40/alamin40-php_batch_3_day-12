<?php
namespace App\classes;
use App\classes\User;
class Calculator extends User
{
    public $firstNumber = 10;
    public $secondNumber;
    public $operator;
    public $result;
    public $user;

    public function __construct()
    {
        echo 'In construct';
    }

    public function index(){
//        $this->user = new User();
        echo $this->logout();
    }

    public function one(){
        echo 'In one';
    }

    private function two(){
        echo 'In two';
    }
}