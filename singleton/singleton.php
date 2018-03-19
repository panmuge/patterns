<?php 
namespace singleton;
/**
*单例模式 ：保证一个类仅有一个实列，并提供一个访问他的全局访问点
*/
class Singleton{
    /**
    *自身实列
    */
    private static $_instance;

    /**
    *构造函数
    *@return void
    */
    private function __construct(){

    }

    /**
    *魔术方法 __clone
    *禁止clone对象
    *@return string
    */
    public function __clone(){
        echo 'clone is forbidden';
        return false;
    }

    /**
    *获取实列
    */
    public static function getInstance(){
        if(!self::$_instance instanceof self){
            self::$_instance = new self;
        }
        return self::$_instance;
    }

    /**
    *测试方法
    *@return string
    */
    public function test(){
        echo "这是测试测试\n";
    }

}

