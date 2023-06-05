<?php

/* echo "<pre>";
var_dump($_POST);
echo "</pre>"; */

$nombre = $_POST['nombre'];
$username = $_POST['username'];
$correo = $_POST['correo'];
$edad = $_POST['edad'];

$htmlentities = htmlentities($nombre); //no permite manipular la página mediante html
$addslashes = addslashes($username); //escapar caracteres
$onlywords = preg_replace("/\d/", "", $username); //Reemplaza carácteres que pueden generar conflicto
$onlynumbers = preg_replace("/\D/", "", $username);
$emailsanity = filter_var($correo, FILTER_SANITIZE_EMAIL); // Elimina carácteres no válidos
$agesanity = filter_var($edad, FILTER_SANITIZE_NUMBER_INT);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h3>Nombre sin sanitizar:</h3>
    <p><?= $nombre ?></p>
    
    <h3>Nombre sanitizado:</h3>
    <p><?= $htmlentities ?></p>

    <h3>Usuario sin sanitizar:</h3>
    <p><?= $username ?></p>

    <h3>Usuario sanitizado con addslashes:</h3>
    <p><?= $addslashes ?></p>

    <h3>Usuario sanitizado con preg_replace: Sin números</h3>
    <p><?= $onlywords ?></p>

    <h3>Usuario sanitizado con preg_replace: Solo números</h3>
    <p><?= $onlynumbers ?></p>
    
    <h3>Email sin sanitizar:</h3>
    <p><?= $correo ?></p>
    
    <h3>Email sanitizado:</h3>
    <p><?= $emailsanity ?></p>

    <h3>Edad sin sanitizar:</h3>
    <p><?= $edad ?></p>

    <h3>Edad sanitizado:</h3>
    <p><?= $agesanity ?></p>


</body>
</html>