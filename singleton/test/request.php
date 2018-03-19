<?php 

namespace singleton\test;

class request{
    //静态成员属性 不能通过类访问 
    //可以使用 request::$num; 的方式访问
    public static $num = 11;
    protected static $instance;
    public function __construct()
    {

    }

    public static function instance($options = [])
    {
        if (is_null(self::$instance)) {
            self::$instance = new static($options);
        }
        return self::$instance;
    }
}


