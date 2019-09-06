<?php

namespace Models;

class GalleryModel {

    private $db;

    function __construct(DbModel $db){
        $this->db = $db;
    }

    //Получаем все записи
    public function getAllImages(){
        $result = $this->db->select('SELECT * FROM `gallery`');
        return $result;
    }

    //Получаем одну запись по id
    public function getOneImages($id){
        $sql = "SELECT * FROM `gallery` WHERE id=:id";
        $result = $this->db->one($sql,['id' => $id]);
        return $result;
    }

}