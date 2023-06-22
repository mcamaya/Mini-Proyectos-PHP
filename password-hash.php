<?php

$contraseña = "miContraseña123";

$contraseña_hash = password_hash($contraseña, PASSWORD_DEFAULT);
echo $contraseña_hash;
echo "<br>";

// este es el campo que ingresa el usuario al hacer login
$ingreso = "miContraseña123";

if (password_verify($ingreso, $contraseña_hash)) {
    echo "Contraseña correcta";
    //redireccionamos
} else {
    echo "Constraseña incorrecta";
}