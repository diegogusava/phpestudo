<?php

namespace app;


class Application
{

    const PROJECT = "/estudo";

    const DATABASE_TYPE = "mysql";
    const DATABASE_NAME = "estudo";
    const DATABASE_SERVER = "localhost";
    const DATABASE_USERNAME = "root";
    const DATABASE_PASSWORD = "";
    const DATABASE_CHARTSET = "utf8";

    public static function configuration()
    {
        self::router();
    }


    private static function router(){
        //ROUTER
        $router = RouterSingleton::getInstance();
        $router->setBasePath(Application::PROJECT);
        include_once 'routes.php';
        $match = $router->match();

        // call closure or throw 404 status
        if( $match && is_callable( $match['target'] ) ) {
            call_user_func_array( $match['target'], $match['params'] );
        } else {
            // no route was matched
            header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
            include_once 'src/views/404.php';
        }
        //END ROUTER
    }

}