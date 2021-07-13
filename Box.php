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
    var_dump(serialize($block));
    while ($hashedminedblock != $hashedblock){
        $block['nonce'] = rand(0, 9999999);
        $hashedblock = hash("sha256", serialize($block));
        $hashedminedblock = $hashedblock;
        $hashedminedblock[0] ="1";
        $hashedminedblock[1] ="3";
        $hashedminedblock[2] ="3";
        $hashedminedblock[3] ="7";
    }

    echo "MINED!";
    echo $block['nonce'];
}
mine($block);

