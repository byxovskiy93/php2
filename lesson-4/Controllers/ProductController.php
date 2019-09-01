<?php

namespace Controllers;

use Models\DbModel;
use Models\ProductModel;

class ProductController extends IndexController {

    private $shop_model;

    public function __construct(){
        parent::__construct();
        $this->shop_model = new ProductModel(DbModel::getInstance());
        //Определяем основной шаблон контроллера
        $this->template = 'shop.tpl';
    }

    public function index(){
        $products = $this->shop_model->getLimitProduct(9);
        $this->vars['content'] = $this->twig->render('shopContent.tpl',['products' => $products]);
        return $this->renderOutput();
    }

    public function renderOutput(){
        $this->vars['navigator'] = $this->twig->render('layouts/topShopMenu.tpl');
        $this->vars['footer'] = $this->twig->render('layouts/shopFooter.tpl');
        return $this->twig->render($this->template,$this->vars);
    }

    public function pagination($nextPage){
        $products = $this->shop_model->getPaginationProduct($nextPage,9);
        $res = $this->twig->render('ajax/product.tpl',['products' => $products]);
        $json = ['error' => false,'html' => $res];
        echo json_encode($json);
    }

}