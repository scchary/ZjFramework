<?php
/**
 * Created by PhpStorm.
 * User: 96572
 * Date: 2015/8/16
 * Time: 16:25
 */

namespace Core;


class ErrorHandler
{
    /**
     * @param $errorNo 错误级别
     * @param $errorMes 错误信息
     * @param $errorFile 错误文件
     * @param $errorLine 错误行号
     * @param $errorVar 错误发生所用变量
     */
    static function errorHandler($errorNo,$errorMes,$errorFile,$errorLine,$errorVar)
    {
        if(E_USER_ERROR == $errorNo)
        {
            $errorConf = require FRAMEWORK_CONF_PATH.ERROR_CONFIG_NAME.EXT;
            switch($errorMes)
            {
                case 'APP_PATH_NOT_EXITS' :
                    $errorMes = $errorConf[$errorMes];
                    break;
                case 'MODULE_PATH_NOT_EXITS' :
                    $errorMes = MODULE_NAME.$errorConf[$errorMes];
                    break;
                case 'CONTROLLER_NOT_EXITS' :
                    $errorMes = CONTROLLER_NAME.$errorConf[$errorMes];
                    break;
                case 'ACTION_NOT_EXITS' :
                    $errorMes = ACTION_NAME.$errorConf[$errorMes];
                    break;
                case 'CLASS_FILE_NOT_EXITS' :
                    $errorMes = $errorConf[$errorMes];
                    break;
            }
            echo $errorMes;
            exit;
        }
    }
    static function showError()
    {

    }
}