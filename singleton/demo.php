<?php
/**
 * 创建型模式
 *
 * php单例模式
 *
 * @author  panmuge <https://github.com/panmuge/patterns.git>
 * @example 运行 php test.php
 */
// 注册自加载 dirname($_SERVER['SCRIPT_FILENAME'])
// require  dirname(__DIR__) .'/autoload.php';
require  dirname(dirname($_SERVER['SCRIPT_FILENAME'])).'/autoload.php';

/************************************* test *************************************/
use singleton\Singleton;
// 获取单例
$instance = Singleton::getInstance();
$instance->test();
// clone对象试试
$instanceClone = clone $instance;