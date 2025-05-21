<!--Sprint 1 Exercise 3. Ibai Ramirez

Crea un array, afegeix-li 5 nombres enters i després mostrals per pantalla d’un en un.

-->

<?php

$numbers = [];

array_push($numbers, 12, 12455, 60769, 123);
//Another way of pushing values into an array
$numbers[] = 666;



for ($i = 0; $i < COUNT($numbers); $i++) {
    echo PHP_EOL;
    echo "The index " . $i . " has the value " . $numbers[$i] . "";
}


?>