<?php 
// 注册自加载
require dirname($_SERVER['SCRIPT_FILENAME']).'//..//autoload.php';

use singleton\Singleton;

use singleton\test\request;

// 获取单例
$instance = Singleton::getInstance();
$instance->test();
// clone对象试试

$instanceClone = clone $instance;

// var_dump($instanceClone);
//评论 1 gid，2 gid

$instanceClone->test();


$a = request::instance();
$num = request::$num;
var_dump($a);
var_dump($num);
