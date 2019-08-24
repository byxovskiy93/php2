<?php
include 'Classes/Autoload.php';

use Classes\WeightProduct;
use Classes\SoftProduct;
use Classes\PhysicalProduct;

$WeightProduct = new WeightProduct('Морковь',2);
$WeightProduct->showSum();

$SoftProduct = new SoftProduct('Avast');
$SoftProduct->showSum();

$PhysicalProduct = new PhysicalProduct('Кружка',2);
$PhysicalProduct->showSum();



