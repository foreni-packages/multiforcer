<?php

// Generates random MD5M passwords of the length and number specified

if ($argc != 3) {
    print "Usage: makeMD5TestFile [numpasswords] [length]\n";
    exit;
}

$charset = " !\"#$%&'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~";

for ($password = 0; $password < $argv[1]; $password++) {
    $passString = "";
    for ($length = 0; $length < $argv[2]; $length++) {
        $passString .= $charset[rand(0, strlen($charset) - 1)];
    }
    print md5($passString) . "\n";
}


?>