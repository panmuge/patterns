<?php 

// function foobar($arg, $arg2) {
//     echo __FUNCTION__, " got $arg and $arg2\n";
// }
// class foos {
//     function bar($arg, $arg2) {
//         echo __METHOD__, " got $arg and $arg2\n";
//     }
// }


// Call the foobar() function with 2 arguments
// call_user_func_array("foobar", array("one", "two"));

// $foo = new foos;
// call_user_func_array(array($foo, "bar"), array("three", "four"));

class A{
    protected static $str="This is A";
    public static function get_info(){
        echo self::$str;
    }
}
class B extends A{
    protected static $str = "This is B";
}

B::get_info();//This is A

class Ao{
    protected static $str="This is Ao";
    public static function get_info(){
        echo static::$str;
    }
}
class Bo extends Ao{
    protected static $str = "This is Bo";
}

Bo::get_info();//This is Bo