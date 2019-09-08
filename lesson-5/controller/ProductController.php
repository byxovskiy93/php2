<?php

class ProductController extends Controller {

    private $shop_model;

    public function __construct()
    {
        parent::__construct();
        //Определяем основной шаблон контроллера
        $this->template = 'index.tpl';
    }

    public function index(){
        $products = ProductModel::getLimitItem(25);
        $this->vars['content'] = $this->twig->render('productContent.tpl',['products' => $products]);
        return $this->renderOutput();
    }


    public function pagination($get){
        $lastId = $get['lastId'];
        $products = ProductModel::getPaginationProduct(25,$lastId);
        $res = $this->twig->render('ajax/product.tpl',['products' => $products]);
        $json = ['error' => false,'html' => $res];
        echo json_encode($json);
    }

}