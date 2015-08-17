<?php
/**
 * Created by PhpStorm.
 * User: jin
 * Date: 2015/8/15
 * Time: 11:32
 */
//系统常量
define('FRAMEWORK_PATH',__DIR__.'/');//框架根目录
const EXT = '.php';//文件后缀
const CONFIG_DIRECTOR = 'Conf';//配置文件文件夹名称
const CONFIG = 'Conf';//配置文件名称
const CONFIG_EXTENSION = array('db');//额外加载的配置文件的名称
const ERROR_CONFIG_NAME = 'ErrorConf';
const FUNCTION_DIRECTORY = 'Function';
const FUNCTION_FILENAME = 'Function';
const CONTROLLER_DIRECTORY = 'Controller';
define('FRAMEWORK_CONF_PATH',FRAMEWORK_PATH.CONFIG_DIRECTOR.'/');//框架配置文件目录

defined('APP_PATH') ? 0 : define('APP_PATH','./App/');
defined('DEFAULT_MODULE') ? 0 : define('DEFAULT_MODULE','Zj');//默认模块
defined('DEFAULT_CONTROLLER') ? 0 : define('DEFAULT_CONTROLLER','Zj');//默认控制器
defined('DEFAULT_ACTION') ? 0 : define('DEFAULT_ACTION','Zj');//默认方法阿强
defined('URL_SEPARATOR') ? 0 : define('URL_SEPARATOR','/');//默认url分隔符
defined('CONTROLLER_EXT') ? 0 : define('CONTROLLER_EXT','Controller');//默认url分隔符
//defined('BIND_MODULE') ? 0 : define('BIND_MODULE','Home');
//defined('BIND_ACTION') ? 0 : define('BIND_ACTION','Home');
//配置文件
//自动加载函数
//执行开始
require FRAMEWORK_PATH.'Core/ZjFramework.php';
\Core\ZjFramework::start();