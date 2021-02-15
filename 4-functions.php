<?php

/**
 * Functions
 *
 * 1. Writing a simple function
 * 2. Arguments
 * 3. Type hinting
 * 4. Returning values
 */


// 1. Writing a simple function
echo "\n" . '____________________________' . "\n";
echo '1. Writing a simple function' . "\n";

function sayHello()
{
    echo 'Hello!' . "\n";
}

sayHello();


// 2. Arguments
echo "\n" . '____________________________' . "\n";
echo '2. Arguments' . "\n";

function sayMessage($message)
{
    echo $message . "\n";
}

sayMessage('This is a test!');


// 3. Type hinting
echo "\n" . '____________________________' . "\n";
echo '3. Type hinting' . "\n";

function add2(int $number)
{
    $result = $number + 2;

    echo $result . "\n";
}

add2(1);

// 4. Returning values
echo "\n" . '____________________________' . "\n";
echo '4. Returning values' . "\n";

function addAndReturn(int $number)
{
    return $number + 2;
}

echo addAndReturn(2);
echo "\n";


