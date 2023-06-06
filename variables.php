<?php

echo "Texto a imprimir";
echo "<br>";

$text = "Mundo";
$mensaje =  sprintf("Hola %s", $text); // devuelve la cadena formateada como resultado.

printf("Hola %s", $text);
echo "<br>";
echo $mensaje;
echo "<br>";


//variables
$str = 'Juan';
$bool = true;
$num = 89;

//constantes
define("PI", 3.1416);
define("SALUDO", "Hola, Mundo!");

$valores = [$str, $bool, $num, PI, SALUDO, $no_existe];

echo "<pre>";
var_dump($valores);
echo "</pre>";


$num1 = 20;
$num2 = 30;
$num3 = 30;
$num4 = "30";

echo "<pre>";
var_dump($num1 > $num2); // false
var_dump($num1 < $num2); // true
var_dump($num1 >= $num2); // false
var_dump($num1 <= $num2); // true
var_dump($num2 == $num3); // true
var_dump($num2 == $num4); // true
var_dump($num2 === $num4); // false
echo "</pre>";

// operador de nave espacial
echo "<pre>";
var_dump($num1 <=> $num2); // -1  --> a < b
var_dump($num2 <=> $num3); // 0 --> a = b
var_dump($num2 <=> $num1); // 1 --> a > b
echo "</pre>";