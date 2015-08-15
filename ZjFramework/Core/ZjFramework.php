<?php
/**
 * Created by PhpStorm.
 * User: jin
 * Date: 2015/8/15
 * Time: 15:14
 */

namespace Core;


class ZjFramework
{
    static function start(){
        require FRAMEWORK_PATH.'Core/AutoLoad'.EXT;
        spl_autoload_register('\\Core\\Autoload::Load');//注册系统自动加载函数
        //注册错误处理
        //注册异常处理
        //配置加载
        \Core\Config::setConfig(FRAMEWORK_PATH.'Conf/',array_merge(array(CONFIG),CONFIG_EXTENSION));
        var_dump($_SERVER['PATH_INFO']);
    }
}