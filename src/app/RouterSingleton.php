<?php

namespace app;

class RouterSingleton
{

    private static $instance;

    public static function getInstance(){
        if (!isset(self::$instance)){
            self::$instance = new \AltoRouter();
        }

        return self::$instance;
    }

}