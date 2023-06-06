<?php
/* 209 park place New york ny11217 */
$courses = [
    'frontend' => 'JavaScript',
    'framework' => 'Laravel',
    'backend' => 'PHP'
];

foreach ($courses as $key => $value) {
    echo "$key: $value" . "<br>";
}

/* 
frontend: JavaScript
framework: Laravel
backend: PHP
 */

echo "<br>";

foreach ($courses as $course) {
    echo "$course" . "<br>";
}

/* 
JavaScript
Laravel
PHP
*/

echo "<br>";

function upper($val){
    echo strtoupper($val) . "<br>";
}

array_walk($courses, 'upper');

/* 
JAVASCRIPT
LARAVEL
PHP
*/

array_key_exists('frontend', $courses); //busca llaves
in_array('JavaScript', $courses); //busca valores
array_keys($courses);
array_values($courses);
