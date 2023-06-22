<?php

$datos = '[
    {
        "nombre":"Camila",
        "apellido":"Amaya",
        "edad":18
    }, 
    {
        "nombre":"Sofia",
        "apellido":"Suarez",
        "edad":20
    }, 
    {
        "nombre":"Pedro",
        "apellido":"Solano",
        "edad":17
    }
]';


echo "<pre>";
var_dump($datos);

echo "<br>";

$datos_array = json_decode($datos, true);
var_dump($datos_array);


echo "</pre> <br> <br>";
foreach ($datos_array as $key => $value) {
    echo $value['nombre'] . " " . $value['apellido'] . "<br>";
}