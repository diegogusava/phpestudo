<?php

namespace app;


class DatabaseSingleton
{

    private static $instance;

    public static function getInstance(){
        if (!isset(self::$instance)){
            self::$instance = new \medoo([
                // required
                'database_type' => Application::DATABASE_TYPE,
                'database_name' => Application::DATABASE_NAME,
                'server' => Application::DATABASE_SERVER,
                'username' => Application::DATABASE_USERNAME,
                'password' => Application::DATABASE_PASSWORD,
                'charset' => Application::DATABASE_CHARTSET
            ]);;
        }

        return self::$instance;
    }

}