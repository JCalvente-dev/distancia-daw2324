<?php

/**
 *
 * Funciones de prueba para el ejercicio 1.2 en la TAREA 5 de DAW
 *
 * @package practicaCALVENTE
 * @version 1.0
 * @author Juan Calvente
 */

// Definimos variables estáticas con valores predeterminados
static $num1 = 5;
static $num2 = 3;


/**
 * Función para sumar dos números.
 *
 * @param int $num1 El primer número.
 * @param int $num2 El segundo número.
 * @return int El resultado de sumar $num1 y $num2.
 * @internal Este es el comentario para desarrolladores.
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

// Ejecutamos los métodos usando las variables estáticas y mostramos el resultado
echo "$num1 + $num2 = " . sumar($num1, $num2) . "\n";
echo "$num1 * $num2 = " . multiplicar($num1, $num2) . "\n";
