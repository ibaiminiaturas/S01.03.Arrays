<!--Sprint 1. Chapter 3. Exercise 2. Ibai Ramirez

$X = array (10, 20, 30, 40, 50, 60);
Mostrar por pantalla el tamaño del array anterior y posteriormente elimina un elemento del array anterior. 
Después de eliminar el elemento, las claves enteras deben ser normalizadas (se deben reorganizar sus índices). Muestra por última vez el tamaño del array.

-->


<?php
$X = array(10, 20, 30, 40, 50, 60);
echo PHP_EOL;
echo "The size of the array is " . count($X);
echo PHP_EOL;

unset($X[2]);

array_values($X);

echo "The new size of the array is " . count($X);
echo PHP_EOL;

?>