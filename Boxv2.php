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

// nur ersten 4 stellen vergleichen und nur bestimmten Inhalt hashen -> in einen String pasten, den hashen
function mine($block){
    $hashedblock = "hello";
    $hashedminedblock = "test";
    $stringdump = "";
    $stringdump = $block['number'].$block['data'].$block['nonce'];
    while ($hashedblock[0] != 1 && $hashedblock[1] != 3 && $hashedblock[2] != 3 && $hashedblock[3] != 7 ){
        $block['nonce'] = rand(0, 9999999);
        $hashedblock = hash("sha256", $stringdump);
        var_dump($hashedblock);
    }
    echo "MINED!";
    echo $block['nonce'];
}
mine($block);
