<?php
require_once('./Cat.php');
require_once('./Mouse.php');
require_once('./Lion.php');

echo "動物が戦うプログラムです\nネズミ、ネコ、ライオンが登場します\n基本の攻撃力はそれぞれ1,5,10ですが、若干量変動します\n";

$animals=[
    new Mouse(), new Mouse(), new Mouse(),
    new Cat(), new Cat(), new Cat(),
    new Lion(), new Lion(), new Lion(),
];
for($i=0; $i<count($animals); $i++ ){
    $anml = $animals[$i];
    // echo "{$i}, {$anml->name}, {$anml->strength}\n";
    echo "{$i}, {$anml->name}\n";
}

do{
    echo "攻撃する動物の番号を入力してください";
    $stdin1 = (int)trim(fgets(STDIN)); 
    do{
        echo "攻撃される動物の番号を入力してください";
        $stdin2 = (int)trim(fgets(STDIN));  
    } while($stdin2 == $stdin1);
}while( $stdin1 < 0 or $stdin1 >= count($animals) or $stdin2 < 0 or $stdin2 >= count($animals) );

$animals[$stdin1]->eat( $animals[$stdin2] );//捕食するメソッド

// echo "end of the story\n";