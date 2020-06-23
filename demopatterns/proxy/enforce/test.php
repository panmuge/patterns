<?php

// 注册自加载
spl_autoload_register('autoload');

function autoload($class)
{
    require dirname($_SERVER['SCRIPT_FILENAME']) . '//..//..//' . str_replace('\\', '/', $class) . '.php';
}

/************************************* test *************************************/

use proxy\enforce\RealSubject;


try {
    echo "未加代理之前：\n";
    // 生产运动鞋
    $subject = new RealSubject();
    $subject->doSomething();

    echo "\n--------------------\n";

    echo "使用强制代理：\n";
    $proxy = $subject->getProxy();
    // 代工厂生产运动鞋
    $proxy->doSomething();
} catch (\Exception $e) {
    echo $e->getMessage();
}
?>
<?php 
/**
 * @param $lat1
 * @param $lng1
 * @param $lat2
 * @param $lng2
 * @return int 
 */
function getDistance($lat1, $lng1, $lat2, $lng2)
{//将角度转为狐度
    $radLat1=deg2rad($lat1);//deg2rad()函数将角度转换为弧度
    $radLat2=deg2rad($lat2);
    $radLng1=deg2rad($lng1);
    $radLng2=deg2rad($lng2);
    $a=$radLat1-$radLat2;
    $b=$radLng1-$radLng2;
    $s=2*asin(sqrt(pow(sin($a/2),2)+cos($radLat1)*cos($radLat2)*pow(sin($b/2),2)))*6378.137;
    return $s;
}
/**
 * @param $lat1
 * @param $lon1
 * @param $lat2
 * @param $lon2
 * @param float $radius  星球半径
 * @return float 
 */
function get_distance($lat1,$lon1,$lat2,$lon2,$radius=6378.137)
{    
    $rad = floatval(M_PI / 180.0);
    $lat1 = floatval($lat1) * $rad;
    $lon1 = floatval($lon1) * $rad;
    $lat2 = floatval($lat2) * $rad;
    $lon2 = floatval($lon2) * $rad;
    $theta = $lon2 - $lon1;
    $dist = acos(sin($lat1) * sin($lat2)+cos($lat1) * cos($lat2) * cos($theta));
    if ($dist < 0 ) {
        $dist += M_PI;
    }    
    return $dist = $dist * $radius;
}
$lat1 = '31.253411';
$lon1 = '121.518998';
$lat2 = '31.277117';
$lon2 = '120.744587';
echo getDistance($lat1, $lon1, $lat2, $lon2);//73.734589823361
echo "<br>";
echo get_distance($lat1, $lon1, $lat2, $lon2);//73.734589823354
?>