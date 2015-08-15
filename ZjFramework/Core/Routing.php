<?php
/**
 * Created by PhpStorm.
 * User: jin
 * Date: 2015/8/15
 * Time: 17:12
 */

namespace Core;


class Routing
{
    static function routing()
    {
//        var_dump($_SERVER['PATH_INFO']);
        $routing = substr($_SERVER['PATH_INFO'],0,1)=='/' ? substr($_SERVER['PATH_INFO'],1) : $_SERVER['PATH_INFO'];
        $routing = substr($routing,strlen($routing)-1,1)=='/' ? substr($routing,0,strlen($routing)-1) : $routing;
        var_dump($routing);
        $routing = explode('/',$routing);
        var_dump($routing);
        if(defined('BIND_MODULE')){
            defined('MODULE_NAME') ? 0 : define('MODULE_NAME',BIND_MODULE);
        }else{

        }
    }
}