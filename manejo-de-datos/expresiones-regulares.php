<?php

/* 
------------------
/ : Contenedor
^ : Inicio
$ : Final
- : Rango
[] : Patrón
{} : Condición
------------------
 */

$password = '1234567';
var_dump ((bool)preg_match('/^[0-9]{6,9}$/', $password));
 //solo números (de 6 a 9 números), en el rango del 0 al 9