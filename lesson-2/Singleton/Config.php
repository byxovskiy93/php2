<?php
trait config {

    private static $config;
    private static $configArray = [
        'ip' => '127.0.0.1',
        'port' => '2525',
        'login' => 'root',
        'password' => 'root'
    ];

    private function __construct() {}

    public static function getInstance() {
        if (self::$config === null) {
            self::$config = new self();
        }
        return self::$config;
    }

    protected function init() {}

    public static function getConfig($name) {
       if(!empty(self::$configArray[$name])){
           return self::$configArray[$name];
       }else{
           return false;
       }
    }

    public static function getAllConfig() {
        return self::$configArray;
    }

}

class Test {
    use Config;
    static function getAllConfigList(){
        print_r(self::getAllConfig());
    }
}

Test::getAllConfigList();