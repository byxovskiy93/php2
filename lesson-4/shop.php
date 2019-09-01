<?php
include 'Autoload.php';

use Controllers\ProductController;

if(!empty($_GET['next_page'])){
    $nextPage = (int)$_GET['next_page'];
    $product = new ProductController();
    echo $product->pagination($nextPage);
}else{
    $product = new ProductController();
    echo $product->index();
}