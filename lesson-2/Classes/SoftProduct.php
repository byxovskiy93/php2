<?php

namespace Classes;

class SoftProduct extends AbstractProduct
{
    const PRICE = 100;
    private $count;

    function __construct($name){
        parent::__construct($name);
    }

    function getCount(){
        return $this->count;
    }

    function getPrice(){
        return self::PRICE * $this->count;
    }

    function getSum(){
        return self::PRICE;
    }

    function showSum(){
        echo "Цена товара (".$this->getName()."): состовляет ".$this->getSum().'.руб'.PHP_EOL;
    }
}

