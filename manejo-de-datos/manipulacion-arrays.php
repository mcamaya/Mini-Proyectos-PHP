<?php

$courses = ['php', 'javascript', 'laravel'];

sort($courses); //ordena en orden alfabético

echo "<pre>";
var_dump($courses);
echo "</pre>";


rsort($courses); // sort-reverse
echo "<pre>";
var_dump($courses);
echo "</pre>";

$courses2 = [
    10 =>'php',
    100 =>'javascript',
    1000 => 'laravel'
];

ksort($courses2); // key-sort

echo "<pre>";
var_dump($courses2);
echo "</pre>";


krsort($courses2); // key-sort-reverse

echo "<pre>";
var_dump($courses2);



 /* ------------------ */
echo "-----------------------------<br>";

$courses3 = ['php', 'javascript', 'laravel', 'python', 'react', 'vuejs'];
var_dump(array_slice($courses3, 1)); // cortamos o emplezamos desde el elemento uno

echo "-----------------------------<br>";

var_dump(array_chunk($courses3, 3));

/* 
array(2) {
  [0]=>
  array(3) {
    [0]=>
    string(3) "php"
    [1]=>
    string(10) "javascript"
    [2]=>
    string(7) "laravel"
  }
  [1]=>
  array(3) {
    [0]=>
    string(6) "python"
    [1]=>
    string(5) "react"
    [2]=>
    string(5) "vuejs"
  }
}

Me organiza los datos en grupos de 3*/

var_dump(array_chunk($courses3, 2));

echo "-----------------------------<br>";

var_dump($courses2);
var_dump(array_flip($courses2)); // valores pasan a ser llaves y llaves pasan a ser valores

echo "</pre>";
