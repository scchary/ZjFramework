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
            $errorMes = $GLOBALS['Config'][$errorMes];
            echo '错误编号：'.$errorNo.PHP_EOL;
            echo '错误信息：'.$errorMes.PHP_EOL;
            echo '错误文件：'.$errorFile.PHP_EOL;
            echo '错误行号：'.$errorLine.PHP_EOL;
        }
    }
    static function showError()
    {

    }
}