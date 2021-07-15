<?php
$number = "1";

function blockname($number){
    $nameofnextblock = "Box";
    $nameofnextblock .= $number;
    $number++;
}
blockname($number);
$block = [
    "number" => $number,
    "data" => "",
    "nonce" => 0,
    "previoushash" => "",
    "hash" => "",
];

function mine($block){
    $hashedblock = "hello";
    $hashedminedblock = "test";
    while ($hashedblock[0] != "1" || $hashedblock[1] != "3" || $hashedblock[2] != "3" || $hashedblock[3] != "7" ){
        $block['nonce'] = rand(0, 9999999);
        $stringdump = $block['number'].$block['data'].$block['nonce'];
        $hashedblock = hash("sha256", $stringdump);
        var_dump($hashedblock);
    }
    echo "MINED!";
    echo $block['nonce'];
    echo "\n";
    echo $hashedblock;
}
mine($block);
