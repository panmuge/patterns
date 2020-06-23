<?php

// 注册自加载
spl_autoload_register('autoload');

function autoload($class)
{
    require dirname($_SERVER['SCRIPT_FILENAME']) . '//..//..//' . str_replace('\\', '/', $class) . '.php';
}

/************************************* test *************************************/

use proxy\ext\RealSubject;
use proxy\ext\Proxy;


try {
    echo "未加代理之前：\n";
    $subject = new RealSubject();
    $subject->doSomething();

    echo "\n--------------------\n";

    echo "加代理：\n";
    $proxy = new Proxy($subject);
    $proxy->doSomething();
} catch (\Exception $e) {
    echo $e->getMessage();
}

?>
<script>
//判断页面是否加载完毕
document.onreadystatechange = subSomething;//当页面加载状态改变的时候执行这个方法.
function subSomething() {
	if(document.readyState=="complete"){
		//加载完毕执行
		$("#jiazailoding").css("display","none");
	}
}
</script>
