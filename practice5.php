<?php

$name = "Arisa Kitazumi";
if ($name == "Arisa Kitazumi") {
    echo "私は $name です";
} else {
    echo "あなたの名前ではありません";
}

echo "\n";

$total = 0;
for ($i = 0; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;

echo "\n";

$fruits = array("mango", "banana", "orange", "melon", "strawberry");
foreach($fruits as $fruits){
    echo "好きなフルーツは" . $fruits . "です。";
    echo "\n";
}

echo "\n";

$start = 1;
$end = 100;

for ($i = $start; $i <= $end; $i++){
    if ($i % 5 == 0){
        echo $i;
        echo "\n";
    }
}
