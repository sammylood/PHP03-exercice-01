<?php
require_once 'Animal.php';

class Pet extends Animal
{
    public string $name;
    public int $date;
    public int $age;

    // public function __construct($name, $studentId){
    //     $this->name = $name;
    //     $this->studentId = $studentId;
    // }

    public function setProp(string $name, int $date, int $age)
    {
        $this->name = $name;
        $this->date = $date;
        $this->age = $age;
    }

    // public function message()
    // {
    //     return 'Salut à tous';
    // }

    // public function setProp($name, $email, $a = null)
    // {
    //     $this->name = $name;
    //     $this->email = $email;
    //     $this->studentId = $studentId;
    // }
}
