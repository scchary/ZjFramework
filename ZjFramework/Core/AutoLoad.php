<?php
/**
 * Created by PhpStorm.
 * User: jin
 * Date: 2015/8/15
 * Time: 11:29
 */
namespace Core;

class AutoLoad
{
    static function Load($class)
    {
        $classPath = str_replace('\\','/',$class);
        require FRAMEWORK_PATH.$classPath.EXT;
    }
}
