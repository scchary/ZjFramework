<?php
/**
 * Created by PhpStorm.
 * User: jin
 * Date: 2015/8/17
 * Time: 9:01
 */

namespace Core;


class App
{
    /**
     * app开始
     */
    static function startApp()
    {
        define('REAL_APP_PATH',realpath(APP_PATH).'/');
        REAL_APP_PATH ? 0 : trigger_error('APP_PATH_NOT_EXITS',E_USER_ERROR);//APP目录是否存在
        define('MODULE_PATH',REAL_APP_PATH.MODULE_NAME.'/');//模块目录
        file_exists(MODULE_PATH) ? 0 : trigger_error('MODULE_PATH_NOT_EXITS',E_USER_ERROR);//模块目录是否存在

        file_exists(MODULE_PATH.CONTROLLER_DIRECTORY.'/'.CONTROLLER_NAME.EXT) ? 0 : trigger_error('CONTROLLER_NOT_EXITS',E_USER_ERROR);//控制器目录是否存在
        $controller = \Core\Reflection::excute("\\".MODULE_NAME."\\".CONTROLLER_DIRECTORY."\\".CONTROLLER_NAME,ACTION_NAME);
    }

}