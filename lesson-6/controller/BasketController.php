<?php
class BasketController extends Controller {

    public function __construct()
    {
        parent::__construct();
        //Определяем основной шаблон контроллера
        $this->template = 'index.tpl';
    }

    public function index(){

        $idsString = '';

        $basket = false;
        $totalSum = 0;

        if(!empty($_COOKIE["cart"])){
            $basket =    BasketModel::getAllProductBasket(array_keys($_COOKIE["cart"]));
            $totalSum =  BasketModel::getTotalSum($basket);
        }

        //Если авторизован получаем данные по аккаунту
        $auth = Auth::getDataAccount();

        $this->vars['content'] = $this->twig->render('basketContent.tpl',['basket' => $basket,'total' => $totalSum,'auth' => $auth]);
        return $this->renderOutput();
    }


    function addBasket($get){
        $id = (int)$get['id'];
        $week = time() + (7 * 24 * 60 * 60);
        if(!empty($_COOKIE["cart"][$id])){
            if(setcookie("cart[$id]",++$_COOKIE["cart"][$id],$week,'/')){
                return 1;
            }
            return null;
        };
        if(setcookie("cart[$id]",1,$week,'/')){
            return 1;
        }
        return null;
    }

    function deleteBasketId($get){
        $id = (int)$get['id'];
        return BasketModel::deleteBasketId($id);
    }


    function getTotalSum(){
        $totalSum =  BasketModel::getTotalSum();
        return $totalSum;
    }



}