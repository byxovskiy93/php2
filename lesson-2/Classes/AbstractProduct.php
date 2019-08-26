<?php

namespace Classes;
//Создаем абстрактный товар
abstract class AbstractProduct{

    protected $name;

    function __construct($name){
        $this->name = $name;
    }

    function getName(){
        return $this->name;
    }

    //Заставляем реализовывать наследника
    abstract function getPrice();

    //Заставляем реализовывать наследника
    abstract function getSum();

}