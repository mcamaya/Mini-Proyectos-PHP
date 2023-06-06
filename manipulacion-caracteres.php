<?php

$cliente = "Campers Campuslands";
var_dump($cliente);
echo "<br><br>";


echo "Extensión de un string" . "<br>";
echo strlen($cliente);
echo "<br><br>";


echo "Eliminar espacios en blanco" . "<br>";
$cliente_sin_espacios = trim($cliente);
echo $cliente_sin_espacios;
echo "<br><br>";


echo "Convertir a mayúsculas" . "<br>";
echo strtoupper($cliente);
echo "<br><br>";


echo "Convertir a minúsculas" . "<br>";
echo strtolower($cliente);
echo "<br><br>";


echo "Convertir a minúsculas" . "<br>";
echo strtolower($cliente);
echo "<br><br>";

$mail1 = 'correo@mail.com';
$mail2 = 'CoRreo@mAiL.com';


var_dump(strtolower($mail1) === strtolower($mail2)); //true

echo "<br><br>";

echo str_replace('Campuslands', "Campus", $cliente);
