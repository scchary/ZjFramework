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
//配置文件
//自动加载函数
//执行开始
require FRAMEWORK_PATH.'Core/ZjFramework.php';
\Core\ZjFramework::start();