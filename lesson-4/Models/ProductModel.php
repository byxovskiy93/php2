<?php
namespace Models;

class ProductModel{

    private $db;

    function __construct(DbModel $db){
        $this->db = $db;
    }

    //Получаем все записи
    public function getAllProduct(){
        $result = $this->db->select('SELECT * FROM `products`');
        return $result;
    }

    public function getLimitProduct($count){
        $sql = "SELECT * FROM `products` ORDER BY id DESC LIMIT :count ";
        $result = $this->db->request($sql,['count' => $count]);
        return $result;
    }

    //Получаем одну запись по id
    public function getOneProduct($id){
        $sql = "SELECT * FROM `products` WHERE id=:id";
        $result = $this->db->one($sql,['id' => $id]);
        return $result;
    }

    public function getPaginationProduct($offset,$count){
        $sql = "SELECT * FROM `products` ORDER BY id DESC LIMIT :offset, :count";
        $result = $this->db->request($sql,['offset' => $offset,'count' => $count]);
        return $result;
    }

}