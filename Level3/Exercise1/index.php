<!--Sprint 1. Chapter 3. Level 3. Exercise 1. 
Dada un array de enteros, hacer un programa que:

Devuelve cada valor del array al cubo usando el array-map().
-->


<?php

$numbers = [1, 2, 3, 4, 5];

$cubedNumbers = array_map("cubeNumber", $numbers);

$result = print_r($cubedNumbers, true);
echo "Los numeros al cubo del array son " . $result . PHP_EOL;

function cubeNumber(int $number)
{
    return pow($number, 3);
}
?>
