<?php

/**
 * Variables
 *
 * 1. Data types
 * 2. Casting
 */


// 1. Data types (bool, int, float, string, array)
echo "\n" . '____________________________' . "\n";
echo '1. Data types' . "\n";

$integer = 1;
$boolean = true;
$string  = "1";
$float   = 1.2;
$array   = [0, 1];


$array = ['nome' => 'John Doe', 'idade' => 21];
//var_dump($array);

$people = [
    ['nome' => 'John Doe', 'idade' => 21],
    ['nome' => 'Jane Doe', 'idade' => 22]
];

//var_dump($people);


// 2. Casting
echo "\n" . '____________________________' . "\n";
echo '2. Casting' . "\n";


$var = 1;

$string = (string)$var;

$bool = (bool)$var;

echo gettype($string);
echo "\n";
