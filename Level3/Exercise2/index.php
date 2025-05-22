<!--Sprint 1. Chapter 3. Level 3. Exercise 2. 
Donat un array d’strings, fes un programa que:

Retorni un array on només estiguin els strings que tinguin un nom parell de caràcters usant la funció array_filter()
-->


<?php

$strings = ["Hola", "Msn", "PHP", "Programacion", "Exercici", "si_el_string_tiene_acentos_se_vuelve_loco"];

$oddStrings = array_filter($strings, "isStringEven");

$result = print_r($oddStrings, true);

echo "Los strings que tienen un numero de caracteres pares son: " . $result;


function isStringEven(string $string): bool
{
    return strlen($string) % 2 == 0;
}
?>
