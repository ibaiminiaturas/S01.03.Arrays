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

function doWordsHaveCharSecondVersion(array $words, string $character): bool
{
    $index = 0;
    $found = true;
    while ($index < count($words) && $found) {
       if (strpos($words[$index], $character[0]) === false) {
            $found = false;
        }
        $index++;
    }
    return $found;
}


echo PHP_EOL;
echo "Is there an 'l' in all the words of the array?: " . (doWordsHaveChar($words, "l") ? "true" : "false");

echo PHP_EOL;
echo "Is there an 'h' in all the words of the array?: " . (doWordsHaveChar($words, "h") ? "true" : "false");


echo PHP_EOL;
echo "Is there an 'l' in all the words of the array?: " . (doWordsHaveCharSecondVersion($words, "l") ? "true" : "false");

echo PHP_EOL;
echo "Is there an 'h' in all the words of the array?: " . (doWordsHaveCharSecondVersion($words, "h") ? "true" : "false");

?>