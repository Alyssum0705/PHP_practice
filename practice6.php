<?php
function sum($max){
    $result = 0;
    for ($i = 0; $i <= $max; $i++){
        $result = $i * 2;
    }
    return $result;
}
echo sum(20);

echo "\n";

function add($a, $b){
    $total = 0;
    for ($i = 0; $i <= $a + $b; $i++){
        $total = $a + $b;
    }
    return $total;
}
echo add(10, 20);

echo "\n";

$arr = array(1,3,5,7,9);
function arr($arr){
    $results = array_product($arr);
    return $results;
}
echo arr($arr);

echo "\n";

function max_array($arr){
    $max_number = $arr[0];
    foreach ($arr as $a){
        if ($a > $max_number){
            $max_number = $a;
        }
    }
    return $max_number;
}
echo max_array($arr);

echo "\n";

$example = "<p>タグは削除します。</p>" . "<h1>タグは残します。</h1>";
echo strip_tags($example, "<h1>");

echo "\n";

$array_add = array_push($arr, 11, 13);
var_dump($arr);

echo "\n";

$color1 = array("pink", "blue", "green");
$color2 = array("purple", "white", "red");
$variety = array_merge($color1, $color2);

var_dump($variety);

echo "\n";

date_default_timezone_set('Asia/Tokyo');

$time1 = time();
echo date('Y年m月d日 H時i分s秒', $time1);
echo "\n";
$time2 = mktime(12, 30, 0, 7, 24, 2022);
echo date('Y年m月d日 H時i分s秒', $time2);
