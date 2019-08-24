<?php

namespace Classes;

class PhysicalProduct extends AbstractProduct{

    private $count;
    const PRICE = 300;

    function __construct($name,$count){
        parent::__construct($name);
        $this->count = $count;
    }

    function getPrice(){
        return self::PRICE;
    }

    function getSum(){
      return self::PRICE * $this->count;
    }

    function getCount(){
        return $this->count;
    }

    function showSum(){
        echo "Цена товара (".$this->getName()."): в количестве ".$this->getCount()." состовляет ".$this->getSum().'.руб'.PHP_EOL;
    }

}