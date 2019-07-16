<?php
/**
 * 创建型模式
 *
 * php单例模式
 *
 * @author  panmuge <https://github.com/panmuge/patterns.git>
 * @example 运行 php test.php
 */
// 注册自加载
spl_autoload_register('autoload');
function autoload($class)
{
  require dirname($_SERVER['SCRIPT_FILENAME']) . '//..//' . str_replace('\\', '/', $class) . '.php';
}