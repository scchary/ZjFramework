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
        \Core\Routing::routing();//根据参数对应到相应的方法
        self::setGet();
        var_dump($_GET);
        var_dump(realpath(APP_PATH));
    }
    //设置GET变量
    static function setGet()
    {
        while(array_search('',$_SERVER['PATH_INFO']) !== false)
        {
            array_splice($_SERVER['PATH_INFO'],array_search('',$_SERVER['PATH_INFO']),1);
        }
        var_dump($_SERVER['PATH_INFO']);
        if(!$_SERVER['PATH_INFO'])
        {
            return;
        }
        foreach($_SERVER['PATH_INFO'] as $key => $value)
        {
            if($key%2 == 0)
            {
                $_GET[$value] = isset($_SERVER['PATH_INFO'][$key+1]) ? $_SERVER['PATH_INFO'][$key+1] : '';
            }
        }
    }
}