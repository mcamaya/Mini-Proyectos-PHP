<?php

var_dump(isset($_POST['nombre'])); //valida si el input existe
var_dump(empty($_POST['nombre'])); //valida si el campo se envió vacío

echo "<br>";

if (isset($_POST['nombre']) && !empty($_POST['nombre'])){
    echo "¡Hola, " . $_POST['nombre'] . "!";
} else {
    echo "No mandaste nada";
}

echo "<br>";

//validación botón de submit
if(isset($_POST['enviar'])){
    echo "Todo el formulario fue enviado";
} else {
    echo "NO se mandó el formulario";
}