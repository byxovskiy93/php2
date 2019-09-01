<?php
include 'Autoload.php';

use Controllers\GalleryController;

if(!empty($_GET['id'])){
    $id = (int)$_GET['id'];
    $gallery = new GalleryController();
    echo $gallery->show($id);
}else{
    $gallery = new GalleryController();
    echo $gallery->index();
}