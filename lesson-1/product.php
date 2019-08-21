<?php
//Объявляем общий класс продукт
class product {

    protected $price;
    protected $name;

    function __construct($name,$price){
        $this->name = $name;
        $this->price = $price;
    }

    function getPrice(){
        return $this->price.' .руб';
    }

    function getName(){
        return $this->name;
    }

}
//Объявляем класс монитор и расширяем родителя
class monitor extends product {

    protected $diagonal;
    protected $maximumResolution;
    protected $pixelResponseTime;
    protected $frequency;
    protected $videoConnectors;

    public function __construct($name,$price,$diagonal,$maximumResolution,$pixelResponseTime,$frequency,$videoConnectors){
        parent::__construct($name, $price);
        $this->diagonal = $diagonal;
        $this->maximumResolution = $maximumResolution;
        $this->pixelResponseTime = $pixelResponseTime;
        $this->frequency = $frequency;
        $this->videoConnectors = $videoConnectors;
    }

    function getDiagonal(){
        return $this->diagonal;
    }

    function getResolution(){
        return $this->maximumResolution;
    }

    function getTimeResponse(){
        return $this->pixelResponseTime;
    }

    function getFrequency(){
        return $this->frequency;
    }

    function getVideoConnector(){
        return $this->videoConnectors;
    }

}

$monitorExample = new monitor('Монитор Acer KA190HQb',4200,'18.5','1366x768','5 мс','60 Гц','VGA (D-sub)');
echo $monitorExample->getName().PHP_EOL;
echo $monitorExample->getPrice().PHP_EOL;
echo $monitorExample->getDiagonal().PHP_EOL;
echo $monitorExample->getResolution().PHP_EOL;
echo $monitorExample->getTimeResponse().PHP_EOL;
echo $monitorExample->getFrequency().PHP_EOL;
echo $monitorExample->getVideoConnector().PHP_EOL;
