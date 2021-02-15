<?php

/**
 * Operators
 *
 * 1. Arithmetic (+, -, ++, --, /, *, **, %)
 * 2. Comparison (>, <, ==, ===, !)
 * 3. Logical (&&, ||)
 * 4. Ternary operator
 * 5. Null coalescing operator
 */


// 1. Arithmetic operators
echo "\n" . '____________________________' . "\n";
echo '1. Arithmetic operators' . "\n";

$var1 = 1;

//var_dump(3 ** 2);


// 2. Comparison operators
echo "\n" . '____________________________' . "\n";
echo '2. Comparison operators' . "\n";

$var1 = 1;
$var2 = "1";

//var_dump($var1 == $var2);


// 3. Logical operators
echo "\n" . '____________________________' . "\n";
echo '3. Logical operators' . "\n";

$comparison1 = 1 < 2;
$comparison2 = 1 > 2;

//var_dump($comparison1);
//var_dump($comparison2);
//
//var_dump($comparison1 || $comparison2);




// 4. Ternary operator
echo "\n" . '____________________________' . "\n";
echo '4. Ternary operator' . "\n";

echo !$comparison1 ? 'true' : 'false';



// 5. Null coalescing operator
echo "\n" . '____________________________' . "\n";
echo '5. Null coalescing operator' . "\n";

$name = isset($_POST['name']) ? $_POST['name'] : '';
$name = $_POST['name'] ?? '';

//var_dump($var ?? '1');

