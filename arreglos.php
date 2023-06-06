<?php

$miArray = array("val1", "val2", "val3");
$carrito = ["Tablet", "TV", "Computador", "Smartphone"];

echo "<pre>";
var_dump($carrito);
echo "</pre>";

echo "<br>";
echo "<br>";


echo $carrito[1];

echo "<br>";

//añadir despues de la posicion 2
$carrito[2] = 'New product';

//añadir al final
array_push($carrito, "Audífonos");

//añadir al inicio
array_unshift($carrito, "Smartwatch");

echo "<pre>";
var_dump($carrito);
echo "</pre>";

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


$arrayAsociativo = array(
    "a" => "abracadabra",
    "b" => "burro",
    "c" => "camisa"
);

echo $arrayAsociativo['a']; //abracadabra
echo "<br>";
echo "<br>";

foreach ($arrayAsociativo as $key => $value) {
    echo "Clave: " . $key . ", Valor: " . $value . "<br>";
}

$client = [
    'nombre' => 'Juan',
    'saldo' => 200,
    'info' => [
        'tipo' => 'Premium',
        'disponible' => 100
    ]
];

$client['código'] = 999999;

echo "<br>";
var_dump(in_array('Tablet', $carrito)); //true
echo "<br>";
var_dump(in_array('Carro', $carrito)); //false
echo "<br>";

//ordenar
echo "<br>";
$numeros = [5,9,23,7,62,5,6,3,0,32,1,9];
sort($numeros); //de menor a mayor
echo "<pre>";
print_r($numeros);
echo rsort($numeros); //de mayor a menor 
print_r($numeros);
echo "</pre>";

echo "------------------------------------";

echo "<pre>";
print_r($client);

asort($client); //orden alfabético A-Z
print_r($client);

arsort($client); //orden Z-A
print_r($client);

ksort($client); //ordena llaves alfabeticamente A-Z
print_r($client);

krsort($client); //ordena llaves Z-A
print_r($client);

echo "</pre>";

