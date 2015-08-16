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
        $routing = substr($_SERVER['PATH_INFO'],0,1)=='/' ? substr($_SERVER['PATH_INFO'],1) : $_SERVER['PATH_INFO'];
        $routing = substr($routing,strlen($routing)-1,1)=='/' ? substr($routing,0,strlen($routing)-1) : $routing;
        $routing = explode(URL_SEPARATOR,$routing);
        //确认是否绑定了模块，控制器和操作
        defined('BIND_MODULE') ? (defined('MODULE_NAME') ? 0 : define('MODULE_NAME',BIND_MODULE)) : 0;
        defined('MODULE_NAME') ? 0 : (current($routing) ? (define('MODULE_NAME',current($routing)) && array_splice($routing,0,1)) :define('MODULE_NAME',DEFAULT_MODULE));


        //确认是否绑定了控制器
        defined('BIND_CONTROLLER') ? (defined('CONTLER_NAME') ? 0 : define('CONTROLLER_NAME',BIND_CONTROLLER)) : 0;
        defined('CONTROLLER_NAME') ? 0 : (current($routing) ? (define('CONTROLLER_NAME',current($routing)) && array_splice($routing,0,1)) :define('CONTROLLER_NAME',DEFAULT_CONTROLLER));

        //确认是否绑定了控制器
        defined('BIND_ACTION') ? (defined('CONTLER_NAME') ? 0 : define('ACTION_NAME',BIND_ACTION)) : 0;
        defined('ACTION_NAME') ? 0 : (current($routing) ? (define('ACTION_NAME',current($routing)) && array_splice($routing,0,1)) :define('ACTION_NAME',DEFAULT_ACTION));

        $_SERVER['PATH_INFO'] = $routing;
        return;
    }
}