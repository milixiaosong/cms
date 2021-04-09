<?php

/**
 * 检测是否从index.php根目录进入
*/
defined('IS_INDEX')? :die("请勿直接访问内核文件");


/**
 * 进行路由解析与执行
*/
\Core\Route::start();



