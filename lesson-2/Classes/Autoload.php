<?php

namespace Classes;

//Singleton
class Autoload{

    private static $autoloader;

    public static function init()
    {
        if (self::$autoloader == NULL)
            self::$autoloader = new self();

        return self::$autoloader;
    }

    private function __construct()
    {
        spl_autoload_register([$this,'classes']);
    }

    private function classes($class){
        include $class.'.php';
    }

    private function __clone(){}
    private function __wakeup(){}

}

$start = Autoload::init();

