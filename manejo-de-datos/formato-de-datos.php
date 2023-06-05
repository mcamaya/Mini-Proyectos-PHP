<?php
// Alterar, reemplazar y modificar

echo "<h4> Alterar </h4>";

$text = "PHP es un LENGUAJE";
echo "<strong>Base:</strong> $text" . "<br><br>";

echo "En minúscula: " . strtolower($text) . "<br>";
echo "En mayúscula: " . strtoupper($text) . "<br>";
echo "Primer letra minúscula: " . lcfirst($text) . "<br>"; //lower-case-first
echo "Primer letra mayúscula: " . ucfirst($text) . "<br>"; //upper-case-first

echo "<br><br>";


echo "<h4> Reemplazar </h4>";

$slug = str_replace(' ', '-', $text);
echo $slug . "<br>";

$textjs = str_replace('PHP', 'JavaScript', $text);
echo $textjs . "<br><br>";


echo "<h4> Modificar </h4>";
$code = 39;
$frase = "<h3>Aprendiendo a manipular datos en PHP</h3>";

echo str_pad($code, 10, "#", STR_PAD_BOTH) . "<br><br>"; //STR_PAD_LEFT  o  STR_PAD_RIGHT
echo $frase;
echo strip_tags($frase) . "<br>";

echo "<br><br>";

$otraFrase = "Aprendí programación en el año 2023";
echo strtoupper($otraFrase) . "<br>";
echo mb_strtoupper($otraFrase) . "<br>";
