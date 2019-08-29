<?php
include __DIR__.'/vendor/autoload.php';
include __DIR__ . '/config/config.php';

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
        spl_autoload_register([$this,'controller']);
    }

    private function controller($class){
        include __DIR__.'/'.$class.'.php';
    }

    private function __clone(){}
    private function __wakeup(){}

}

$start = Autoload::init();

