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
        $classPath = defined('REAL_APP_PATH') ?(file_exists(REAL_APP_PATH.$classPath.EXT) ? REAL_APP_PATH.$classPath.EXT : FRAMEWORK_PATH.$classPath.EXT) : FRAMEWORK_PATH.$classPath.EXT;
        file_exists($classPath) ? require $classPath : trigger_error('CLASS_FILE_NOT_EXITS',E_USER_ERROR);
    }
}
