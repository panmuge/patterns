<?php 
//条件判断函数
is_array();//是否为数组

is_object();//是否为对象

is_null();//是否为null

is_numeric();//是否为任意类型的数字

isset();//判断变量是否不为null，为null返回false，不为返回true

empty();//判断变量是否不存在，不存在的情况 0,0.0,'0','',false,[],null

function_exists('function_name');//判断函数是否存在，一般在公共函数库中使用，避免函数名重复问题

gettype();//获取变量类型

unset();//删除变量，删除后为null

var_dump(expression);//打印变量信息

//字符串函数

//数组函数