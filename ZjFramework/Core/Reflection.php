<?php
/**
 * Created by PhpStorm.
 * User: jin
 * Date: 2015/8/17
 * Time: 15:21
 */

namespace Core;


class Reflection
{
    static function getInstance($className,$args = '')
    {
        try
        {
            $class = new \ReflectionClass($className); // 建立反射类
            $instance  = $args ? $class->newInstanceArgs($args) : $class->newInstanceArgs(); // 相当于实例化类
        }
        catch(\Exception $e)
        {
            echo $e->getMessage();
        }
        return $instance;
    }
    static function excute($class,$actionName){
        if(is_object($class))
        {

        }
        else{
            try{
                $instance = new \ReflectionClass($class); // 建立反射类
                if($instance->hasMethod($actionName))
                {
                    $method = $instance->getMethod($actionName);
                    $instance = self::getInstance($class); // 建立反射类
                    $method->invokeArgs($instance,array($actionName));
                }else{
                    trigger_error('')
                }
            }
            catch(\ReflectionException $e)
            {
                echo $e->getMessage();
            }
        }
    }
}