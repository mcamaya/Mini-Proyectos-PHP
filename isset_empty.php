<?php

$clientes = [];
$clientes2 = array();
$clientes3 = array('Pedro', "Juana", "Esteban");
$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200
];

//empty - Revisa si un arreglo está vacío
echo "<pre>";

var_dump(empty($clientes)); //true

var_dump(empty($clientes3)); //false

var_dump(empty($clientes2)); //true

var_dump(isset($clientes798)); //false

var_dump(isset($clientes2)); //true

var_dump(isset($clientes)); //true

var_dump(isset($cliente['nombre'])); //true

var_dump(isset($cliente['codigo'])); //false

echo "</pre>";
