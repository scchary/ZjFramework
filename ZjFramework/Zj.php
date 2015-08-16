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
const CONFIG = 'Conf';//配置文件名称
const CONFIG_EXTENSION = array('db');
defined('DEFAULT_MODULE') ? 0 : define('DEFAULT_MODULE','Zj');//默认模块
defined('DEFAULT_CONTROLLER') ? 0 : define('DEFAULT_CONTROLLER','Zj');//默认控制器
defined('DEFAULT_ACTION') ? 0 : define('DEFAULT_ACTION','Zj');//默认方法
defined('URL_SEPARATOR') ? 0 : define('URL_SEPARATOR','/');//默认url分隔符
defined('APP_PATH') ? 0 : define('APP_PATH','./ZjFramework/');
//defined('BIND_MODULE') ? 0 : define('BIND_MODULE','Home');
//defined('BIND_ACTION') ? 0 : define('BIND_ACTION','Home');
//配置文件
//自动加载函数
//执行开始
require FRAMEWORK_PATH.'Core/ZjFramework.php';
\Core\ZjFramework::start();