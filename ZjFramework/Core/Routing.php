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
        $routing = explode('/',$routing);
        //确认是否绑定了模块，控制器和操作
        if(defined('BIND_MODULE'))
        {
            defined('MODULE_NAME') ? 0 : define('MODULE_NAME',BIND_MODULE);
        }
        if(defined('BIND_CONTROLLER')){
            defined('CONTROLLER_NAME') ? 0 : define('CONTROLLER_NAME',BIND_CONTROLLER);
        }
        if(defined('BIND_ACTION')){
            defined('ACTION_NAME') ? 0 : define('ACTION_NAME',BIND_ACTION);
        }
        switch(count($routing))
        {
            case 0:
                $module = current($routing);
                break;
            case 1:
                $module = current($routing);
                break;
            case 2:
                $module = current($routing);
                break;
            case 3:
                $module = current($routing);
                array_splice($routing,0,1);
                $controller = current($routing);
                array_splice($routing,0,1);
                $action = current($routing);
                array_splice($routing,0,1);
                var_dump($routing);
                break;
            default :
                break;
        }
    }
}