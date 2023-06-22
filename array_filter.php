<?php

$estudiantes = array(
    array("nombre" => "Camila", "apellido" => "Amaya", "edad" => 17),
    array("nombre" => "Jose", "apellido" => "Estrada", "edad" => 25),
    array("nombre" => "Arturo", "apellido" => "Puentes", "edad" => 22),
    array("nombre" => "Ana", "apellido" => "Rojas", "edad" => 15)
);

$menores_edad = array_filter($estudiantes, function($persona){
    return $persona['edad'] < 18;
});

print_r($menores_edad);