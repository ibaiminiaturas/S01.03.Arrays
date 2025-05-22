<!--Sprint 1. Chapter 3. Level 3. Exercise 3. 
Donat un array d’enters, fes un programa que ens retorni la suma dels enters de l’array que siguin primers fent servir la funció array_reduce(). 

-->
<?php

$integers = [2, 3, 4, 5, 6, 7, 8, 9, 10];
    
$addition = array_reduce($integers, "addIfPrime");


echo "La suma de los enteros primos es: " . $addition . PHP_EOL;


function addIfPrime($carry, $item){
    if(isPrime($item)){
        return $carry + $item;
    }
    return $carry;}

function isPrime(int $number)
{
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

?>