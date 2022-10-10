<!-- Crea las siguientes funciones:



Una función que reciba un $array por referencia y devuelva la cantidad de números pares que hay almacenados: arrayPares(array &$array): int 

Crea una función que devuelva el mayor de todos los números recibidos como parámetros: function mayor(): int. Utiliza las funciones func_get_args(), etc... No puedes usar la función max().
Crea una función que concatene todos los parámetros recibidos separándolos con un espacio: function concatenar(...$palabras) : string. Utiliza el operador ....

digitos(int $num): int → devuelve la cantidad de dígitos de un número.
digitoN(int $num, int $pos): int → devuelve el dígito que ocupa, empezando por la izquierda, la posición $pos.
quitaPorDetras(int $num, int $cant): int → le quita por detrás (derecha) $cant dígitos.
quitaPorDelante(int $num, int $cant): int → le quita por delante (izquierda) $cant dígitos.

-->
<?php

function comprobarNumPar(int $num)
{
    if ($num % 2 == 0) {
        echo "Es Par";
    } else {
        echo "Es Impar";
    }
}
/* comprobarNumPar(42); */
/* Una función que devuelva un array de tamaño $tam con números aleatorios comprendido entre $min y $max : arrayAleatorio(int $tam, int $min, int $max) : array */

function arrayAleatorio(int $tam, int $min, int $max)
{

    for ($i = 0; $i < $tam; $i++) {
        $randomNumber[$i] = rand($min, $max);

        for ($j = 0; $j < $i; $j++) {
            while ($randomNumber[$i] == $randomNumber[$j]) {
                $num[$j] = rand($min, $max);
                $j = 0;
            }
        }
    }
    return $randomNumber;
}

var_dump(arrayAleatorio(10, 1, 5))
?>