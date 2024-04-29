<?php

/**
 *
 * Funciones de prueba para el ejercicio 1.2 en la TAREA 5 de DAW
 *
 * @package practicaCALVENTE
 * @version 1.0
 * @author Juan Calvente
 */

/**
 * Función para sumar dos números.
 *
 * @param int $num1 El primer número.
 * @param int $num2 El segundo número.
 * @return int El resultado de sumar $num1 y $num2.
 */
function sumar($num1, $num2)
{
    return $num1 + $num2;
}

/**
 * Función para multiplicar dos números.
 *
 * @param int $num1 El primer número.
 * @param int $num2 El segundo número.
 * @return int El resultado de multiplicar $num1 y $num2.
 */
function multiplicar($num1, $num2)
{
    return $num1 * $num2;
}

// Solicitamos los números y los almacenamos en las variables
$num1 = intval(readline("Introduce el primer número: "));
$num2 = intval(readline("Introduce el segundo número: "));

// Ejecutamos los métodos y mostramos el resultado
echo "$num1 + $num2 = " . sumar($num1, $num2) . "\n";
echo "$num1 * $num2 = " . multiplicar($num1, $num2) . "\n";
