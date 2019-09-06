<?php

namespace Models;
use PDO;

class DbModel{

    private static $db = null;
    private $stmt = null;

    private static $DB_HOST = 'localhost';
    private static $DB_NAME = 'geek_brains_php2';
    private static $DB_USER = 'root';
    private static $DB_PASS = '';

    private function __construct(){
        self::$db = new PDO(
            'mysql:host=' . DB_HOST . ';dbname=' .DB_NAME,
            DB_USER,
            DB_PASS,
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ]
        );
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }

    public static function getInstance()
    {
        if (self::$db != null) {
            return self::$db;
        }

        return new self;
    }

    public function select($sql, $cond=null){
        $result = false;
        try {
            $this->stmt = self::$db->prepare($sql);
            $this->stmt->execute($cond);
            $result = $this->stmt->fetchAll();
        } catch (\Exception $ex) { die($ex->getMessage()); }
        $this->stmt = null;
        return $result;
    }

    public function request($sql, Array $array){
        $result = false;
        try {
            $this->stmt = self::$db->prepare($sql);
            $this->stmt->execute($array);
            $result = $this->stmt->fetchAll();
        } catch (\Exception $ex) { die($ex->getMessage()); }
        $this->stmt = null;
        return $result;
    }

    public function one($sql, Array $array){
        $result = false;
        try {
            $this->stmt = self::$db->prepare($sql);
            $this->stmt->execute($array);
            $result = $this->stmt->fetch();
        } catch (\Exception $ex) { die($ex->getMessage()); }
        $this->stmt = null;
        return $result;
    }





}

