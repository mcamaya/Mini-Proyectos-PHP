<?php

$datos = array(
    "nombre" => "Camila",
    "apellido" => "Amaya",
    "edad" => 18
);

echo "<pre>";
var_dump($datos);

$datos_json = json_encode($datos, true);

var_dump($datos_json);
