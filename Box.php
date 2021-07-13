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
    while ($hashedminedblock != $hashedblock){
        $block['nonce'] = rand(0, 9999999);
        $hashedblock = hash("sha256", serialize($block));
        $minedblock = "";
        $hasedminedblock = $hashedblock;
        $hasedminedblock[0] ="1";
        $hasedminedblock[1] ="3";
        $hasedminedblock[2] ="3";
        $hasedminedblock[3] ="7";
    }

    echo "MINED!";
    echo $block['nonce'];
}
mine($block);

