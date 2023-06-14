<?php

//include 'greet.php'; En caso de no encontrar el archivo enviará una advertencia
//require 'greet.php'; En caso de no encontrar el archivo enviará un fatal error
require_once 'greet.php'; // verificará si el archivo ya ha sido incluido y si es así, no se incluye.

echo greet('Camila', '¿cómo estás?');