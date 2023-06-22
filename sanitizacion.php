<?php

$codigo_malicioso = "<script>alert('Soy un script malicioso, jejeje');</script>";

// elimina mis etiquetas html, así que evita que se ejecute el script malicioso
$input_sanitizado = filter_var($codigo_malicioso, FILTER_SANITIZE_STRING);
echo $input_sanitizado;
