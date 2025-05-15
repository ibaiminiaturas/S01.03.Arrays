<!--Sprint 1. Chapter 3. Exercise 4. Ibai Ramirez
Haz un array asociativo que represente información de ti mismo/a. En concreto debe incluir:

nombre
edad
email
comida favorita

-->


<?php

$mySelf = array("Nombre" => "Ibai", "Edad" => "CLASSIFIED!!!!!", "EMAIL" => "ibaiminiaturas@gmail.com", "Comida Favorita" => "Patatas fritas");


echo PHP_EOL;
echo "My name is " . $mySelf["Nombre"];

echo PHP_EOL;
echo "My age is " . $mySelf["Edad"];


echo PHP_EOL;
echo "My email is " . $mySelf["EMAIL"];

echo PHP_EOL;
echo "My favorite food is " . $mySelf["Comida Favorita"];

?>