<?php

$dato = "hello world";

//longitud del str
echo strlen($dato); // 11

// posición de una palabra
echo  strpos($dato, "world"); // 6

$dato2 = "Me especializo en FrontEnd";
// reemplazamos palabras
echo str_replace("FrontEnd", "BackEnd", $dato2); // Me especializo en BackEnd

echo strtolower($dato2); // me especializo en frontend
echo strtoupper($dato2); // ME ESPECIALIZO EN FRONTEND

// extraemos una parte del texto
echo substr($dato2, 5, 15); // pecializo en Fr