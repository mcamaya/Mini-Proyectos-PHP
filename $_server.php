<?php

//info con $_SERVER

$URL =  $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$NAME = $_SERVER['SCRIPT_NAME'];
$PORT = $_SERVER['SERVER_PORT'];
$PROTOCOLO = $_SERVER['SERVER_PROTOCOL'];

echo $URL . "<br>";
echo $NAME . "<br>";
echo $PORT . "<br>";
echo $PROTOCOLO . "<br>";