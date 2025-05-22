<!-- Srpint 1. Chapter 3. Level 2. Exercise 2
Crea un programa que liste las notas de los/as alumnos/as de una clase. 
Por eso deberemos utilizar un array asociativo donde la clave será el nombre de cada alumno. Cada alumno tendrá 5 notas (valoradas del 0 al 10).

Además, crea una función que, dadas las notas de todos los alumnos/as, nos muestre tanto la media de la nota de cada alumno, como la nota media de la clase entera.
-->

<?php


$students = array(
    "Jose" => array(5, 6, 7, 4, 6),
    "Pepe" => array(4, 3, 1, 5, 7),
    "Luis" => array(0, 2, 3, 7, 9),
    "Pedro" => array(10, 2, 8, 8, 8),
);

echo listStudentsAndGrades($students) . PHP_EOL;
echo calculateEstudentsAverage($students) . PHP_EOL;
echo calculateClassAverage($students) . PHP_EOL;




function listStudentsAndGrades($students): string
{
    $result = "";
    $result .= "Las notas de los alumnos son: " . PHP_EOL;

    while (key($students) != NULL) {
        $result .= "Estudiante " . key($students) . ":" . PHP_EOL;
        foreach (current($students) as $grade) {
            $result .= $grade . PHP_EOL;
        }
        next($students);
        array_values($students);
    }
    return $result;
}


function calculateEstudentsAverage(array $students): string
{
    $result = 0;
    $studentAverage = 0;

    foreach ($students as $key => $value) {
        foreach ($value as $grade) {
            $studentAverage += $grade;
        }
        $result .= "Estudiante " . $key . " tiene una nota media de :" . $studentAverage / count($value) . PHP_EOL;
        $studentAverage = 0;
    }

    return $result;
}


function calculateClassAverage(array $student): string
{
    $classAverage = 0;
    $studentAverage = 0;
    foreach ($student as $key => $value) {
        foreach ($value as $grade) {
            $studentAverage += $grade;
        }
        $classAverage += ($studentAverage / count($value));
        $studentAverage = 0;
    }

    return "La nota media de la clase es: " . $classAverage / count($student) . PHP_EOL;
}

?>