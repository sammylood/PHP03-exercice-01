<?php
abstract class Animal
{

    protected string $type;


    // abstract public function message();

    //abstract function setProp($a, $b, $c);



    final public function __construct($type)
    {
        $this->type = $type;
    }

    // final public function message(){
    //     echo 'abc Person';
    // }
}
