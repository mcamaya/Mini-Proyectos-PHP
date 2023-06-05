<?php

echo "<h4>Comillas</h4>";

echo 'Podemos poner textos de una línea...
o dos??
tal vez tres ;)  
comilla simple\'  backslash \\ continuar con más tetxo - $variable :((';

echo '<br> El backslash nos ayuda a espacar caracteres';

$name = 'Camila';
echo "<br>";
echo "Hola! Mi nombre es $name! :D  ---- Las comillas dobles permiten la interpolarización";

echo "<br><br>";

echo "<h4>Arreglos y objetos</h4>";

$courses = [
    'backend' => [
        'PHP', 
        'Laravel'
        ]
];


echo "{$courses['backend'][0]}" . " --- Debemos usar {} al escribir estructuras complejas";
echo "<br>";

class User {
    public $name = 'Camila';
}

$user = new User;
echo "$user->name quiere aprender {$courses['backend'][0]}";
echo "<br><br>";


echo "<h4>Variables variables</h4>";

function getTeacher(){
    return 'teacher';
}

$teacher = 'vermen';
$vermen = 'profe de PHP';
echo "$teacher es ${$teacher}";

echo "<br>";

echo "{${getTeacher()}} enseña PHP";