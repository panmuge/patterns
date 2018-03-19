<?php 
//自动加载
function autoload($class)
{
  require dirname($_SERVER['SCRIPT_FILENAME']).'//..//'.str_replace('\\', '/', $class) . '.php';
}

spl_autoload_register('autoload');