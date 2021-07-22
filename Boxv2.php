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
    "data" => "luuuhzuihi",
    "nonce" => 0,
    "previously" => "0000000000000000000000000000000000000000000000000000000000000000",
    "hash" => "",
];

function mine($block){
    $hashedblock = "hello";
    $hashedminedblock = "test";
    $number = 0;
    while ($hashedblock[0] != "1" || $hashedblock[1] != "3" || $hashedblock[2] != "3" || $hashedblock[3] != "7" ){
        $block['nonce'] = $number;
        $number++;
        $stringdump = $block['number'].$block['data'].$block['nonce'].$block['previously'];
        $hashedblock = hash("sha256", $stringdump);
        var_dump($hashedblock);
    }
    $block['hash'] = $hashedblock;
    echo "MINED! ";
    echo $block['nonce'];
    echo "\n";
    echo $hashedblock;
}
mine($block);
