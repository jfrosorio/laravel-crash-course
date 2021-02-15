<?php

/**
 * Control structures
 *
 * 1. if
 * 2. while
 * 3. for
 * 4. foreach
 * 5. switch
 */


// 1. if
echo "\n" . '____________________________' . "\n";
echo '1. if' . "\n";

$var = 1;

echo $var ? 'true' : 'false';

//if ($var === 1) {
//    echo 'true';
//} else {
//    echo 'false';
//}


// 2. while
echo "\n" . '____________________________' . "\n";
echo '2. while' . "\n";

$count = 1;

while ($count <= 5) {
    echo $count . "\n";
    $count++;
}

// 3. for
echo "\n" . '____________________________' . "\n";
echo '3. for' . "\n";

for ($i = 1; $i <= 5; $i++) {
    echo $i . "\n";
}


// 4. foreach
echo "\n" . '____________________________' . "\n";
echo '4. foreach' . "\n";

$arr = [1, 2, 3, 4, 5];

//for ($i = 0; $i < sizeof($arr); $i++) {
//    echo $arr[$i] . "\n";
//}

foreach ($arr as $key => $val) {
    echo $key . ': ' . $val . "\n";
}

// 5. switch
echo "\n" . '____________________________' . "\n";
echo '5. switch' . "\n";
