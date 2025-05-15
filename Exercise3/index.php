<!--Sprint 1. Chapter 3. Exercise 3. Ibai Ramirez

Crea una función que reciba como parámetros un array de palabras y un carácter. 
La función nos devuelve true si todas las palabras del array tienen el carácter pasado como segundo parámetro.

Por ejemplo:

Si tenemos [“hola”, “Php”, “Html”] devolverá true si preguntamos por “h” pero falso si preguntamos por “l”..

-->


<?php

$words = array("hola", "Php", "html");

function doWordsHaveChar(array $words, string $character): bool
{
    $result = 0;
    if ($character !== "" && $character[0] !== "") {
        $result = array_filter($words, fn($word) => strpos($word, $character[0]) !== false);
    }
    return (count($result) === count($words));
}


echo PHP_EOL;
echo "Is there an 'l' in all the words of the array?: " . var_export(doWordsHaveChar($words, "l"), true);

echo PHP_EOL;
echo "Is there an 'h' in all the words of the array?: " . var_export(doWordsHaveChar($words, "h"), true);

?>