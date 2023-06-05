<?php

$data = 'Estoy estudiando PHP';
/* echo $data[0]; // E */

echo "<h4>Extraer frase de un string</h4>";

$post = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius odit, vero deserunt dicta dolores praesentium a? Quis enim, adipisci laborum, officia excepturi, voluptate doloribus inventore est iusto labore a magnam.";
$extract = substr($post, 0, 30);
echo "$extract... <a href=#>[ver más]</a>";
echo "<br>";


echo "<h4>Convertir str a array</h4>";

$data = 'JavaScript, PHP, Laravel';
$tags = explode(', ', $data);

echo "<pre>";
var_dump($tags);
echo "</pre>";

/*
 array(3) {
  [0]=>
  string(10) "JavaScript"
  [1]=>
  string(3) "PHP"
  [2]=>
  string(7) "Laravel"
}
 */

echo "<br><br>";

echo "<h4>Convertir array a str</h4>";
$courses = ['Java', 'PHP', 'Ruby', 'Python'];
echo implode(' _-_-_ ', $courses); //Java _-_-_ PHP _-_-_ Ruby _-_-_ Python


echo "<br><br>";

echo "<h4>Quitar espacios con trim</h4>";

$curso1 = '      Curso de PHP     ';
$curso2 = trim($curso1);

echo "<pre>";
echo "Sin trim: Quiero aprender $curso1, sí señor";

echo "<br>";

echo "Con trim: Quiero aprender $curso2, sí señor";
echo "</pre>";