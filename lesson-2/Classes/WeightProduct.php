<?php

namespace Classes;

class WeightProduct extends AbstractProduct{

    private $kgCount;
    const ONE_KG_PRICE = 12;

    function __construct($name,$kgCount){
        parent::__construct($name);
        $this->kgCount = $kgCount;
    }

    function getPrice(){
        return self::ONE_KG_PRICE;
    }

    function getSum(){
        return self::ONE_KG_PRICE * $this->kgCount;
    }

    function getCount(){
        return $this->kgCount;
    }

    function showSum(){
        echo "Цена товара (".$this->getName()."): в количестве ".$this->getCount()." кг. состовляет ".$this->getSum().'.руб'.PHP_EOL;
    }
}