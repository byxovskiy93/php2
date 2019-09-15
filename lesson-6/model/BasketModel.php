<?php

class BasketModel extends Model {

    protected static $table = 'products';

    public static function getAllProductBasket($idsArray){

        $in  = str_repeat('?,', count($idsArray) - 1) . '?';

        $sql = "SELECT * FROM products WHERE id IN ($in)";

        $res = db::getInstance()->Select(
            $sql,$idsArray);

        if(!empty($res)){
            foreach ($res as $k => $v){
                $res[$k]['count'] =  $_COOKIE["cart"][$v['id']];
            }
            return $res;
        }

        return $res;
    }

    public static function getTotalSum($basketArray = ''){

        if(!empty($_COOKIE["cart"]) and empty($basketArray)){
            $basketArray =  BasketModel::getAllProductBasket(array_keys($_COOKIE["cart"]));
        }

        if(!empty($basketArray)){
            $price = 0;
            foreach ($basketArray as $k => $v){
                $price+=  $v['count'] * $v['price'];
            }
            return $price;
        }

        return 0;
    }


    public static function deleteBasketId($id){
        unset($_COOKIE["cart"][$id]);
        if(setcookie("cart[$id]", null, -1,'/')){
            return 1;
        }
        return null;
    }

    public static function clearBasket(){
        $flag = 1;
        foreach ($_COOKIE['cart'] as $k => $v){
            if(!setcookie("cart[$k]", null, -1,'/')){
                $flag = null;
            };
        }
        unset($_COOKIE['cart']);
        return $flag;
    }



}