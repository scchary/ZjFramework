<?php
/**
 * Created by PhpStorm.
 * User: jin
 * Date: 2015/8/15
 * Time: 15:26
 */

namespace Core;


class Config
{

    static $Configs = array();

    /**
     * @param string $path 文件路径
     * @param array $name 文件名称
     */
    static function setConfig($path,$name)
    {
        foreach($name as $nameValue)
        {
            $ConfigPath = $path.$nameValue.EXT;
            if(file_exists($ConfigPath))
            {
                self::$Configs = array_merge(self::$Configs,require $ConfigPath);
            }
        }
        $GLOBALS['Config'] = &self::$Configs;
        return self::$Configs;
    }
}