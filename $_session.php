<?php

// Iniciamos la sesión
session_start();

// Asignamos valores a la sesión

$_SESSION['user'] = "Andres";
$_SESSION['password'] = "4ndres123@";


echo "el usuario es " . $_SESSION['user'] . "<br>"; 
echo "la contraseña es " . $_SESSION['password'] . "<br>"; 

// así yo elimine las variables del código, estas van a permanecer definidas gracias al session


