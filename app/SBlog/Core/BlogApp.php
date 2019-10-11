<?php


namespace App\SBlog\Core;


class BlogApp
{
    public static $app;
    public static function get_instance(){
        self::$app = Registry::instance();
        self::getParams();
        return self::$app;
    }

    protected static function getParams(){
        $params = require_once CONF . '/params.php';

        if (!empty($params)){
            foreach ($params as $k => $v) {
                self::$app->setProperty($k, $v);
            }
        }
    }
}