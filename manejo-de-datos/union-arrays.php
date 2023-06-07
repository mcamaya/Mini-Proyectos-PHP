<?php
echo "<h1>Unión</h1>";
echo "---------------";
echo "<br><pre>";

$frontend = ['javascript'];
$backend = ['php', 'laravel'];

var_dump($frontend + $backend); 
//Me está reemplazando el elemento php, porque tienen mismo índice

$frontend2 = [
    'backend' => 'javascript'
];
$backend2 = [
    'frontend' => 'php', 
    'framework' => 'laravel'
];

var_dump($frontend2 + $backend2); 
//Solucionamos el problema agregando keys a los elementos

echo "<br>";

var_dump(array_merge($frontend, $backend));
// con esta funcion, se reinician los índices, así que no es necesario añadirlos manual

$frontend3 = [
    'a' => 'javascript'
];
$backend3 = [
    'a' => 'php', 
    'b' => 'laravel'
];

var_dump(array_merge($frontend3, $backend3));
// se repiten las llaves, así que sobreescribe el elemento

var_dump(array_merge_recursive($frontend3, $backend3));
// solucionamos el problema. Crea un array con ambos elementos de llave 'a'

echo "---------------<br>";

$cursos = ['javascript', 'php', 'laravel'];
$categorias = ['frontend', 'backend', 'framework'];

var_dump(array_combine( $categorias, $cursos ));
// combina ambos array modo key => value
