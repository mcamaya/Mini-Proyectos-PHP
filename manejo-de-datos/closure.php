<?php

function greet(Closure $lang, $name){
    return $lang($name);
}

$es = function ($name){
    return "Hola, $name!";
};

$en = function ($name){
    return "Hello, $name!";
};

$fr = function ($name){
    return "Salut, $name!";
};

echo greet($en, 'Camila') . "<br>";
echo greet($es, 'Camila') . "<br>";
echo greet($fr, 'Camila') . "<br>";