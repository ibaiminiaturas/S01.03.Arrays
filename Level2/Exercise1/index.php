<!-- Sprint 1. Chapter 3. Level 2. Exercise 1

Crea un programa que contingui dos arrays de nombres enters/floats. Un cop creats, mostra per pantalla el resultat de:

La intersecció dels dos arrays (nombres en comú)
La mescla dels dos arrays.
-->

<?php

$numbersList1 = array(12, 54, 34.6, 435, 459, -123475, 54235);
$numbersList2 = array(34.2, 34.6, 435, 43.4, -75, 542, 12);

$result = array_intersect($numbersList1, $numbersList2);

echo "La intersección de los arrays es igual los elementos:" . PHP_EOL;

print_r($result) . PHP_EOL;

$result = array_merge($numbersList1, $numbersList2);

echo "La combinación de los arrays es igual los elementos:" . PHP_EOL;

print_r($result) . PHP_EOL;

?>