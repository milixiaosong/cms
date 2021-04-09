<?php

/**
 * 确认用户从此文件进入
*/
define('IS_INDEX',true);

/**
 * 设置根目录路径
*/
define("INDEX_DIR",str_replace("\\","/",dirname(__FILE__)."/"));

/**
 * 设置模板路径
*/
define("TPL_URL",str_replace($_SERVER['DOCUMENT_ROOT'],"",INDEX_DIR."Template/"));

/**
 * 设置Smarty模板引擎自动加载
*/
require INDEX_DIR."Smarty/Autoloader.php";
Smarty_Autoloader::register();

/**
 * 设置命名空间自动加载规则
*/
require INDEX_DIR."Core/Autoload.php";
spl_autoload_register("\\Core\\Autoload::start");

/**
 * 检测PHP版本，低于5.3无法使用namespace命名空间关键字
*/
if(PHP_VERSION<5.3){
    die("服务器PHP版本低于5.3");
}

/**
 * 加载核心代码
*/
require INDEX_DIR."Core/start.php";


