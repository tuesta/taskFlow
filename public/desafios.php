<?php
echo "Desafío 1: La Sucesión de Fibonacci<br>";
function fib($n) {
    $acc = [0, 1];

    for ($i = 0; $i < $n; $i++) {
        echo $acc[0] . "<br>";

        $new = $acc[0] + $acc[1];
        $acc[0] = $acc[1];
        $acc[1] = $new;
    }
};

fib(20);

echo "<br><br>Desafío 2: Comprobador de Números Primos<br>";

function isPrime($n) {
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i === 0) {
            return false;
        }
    }
    return true;
}

echo "1000000007 " . (isPrime(1000000007) ? "" : "no ") . "es primo";

echo "<br><br>Desafío 3: ¿Es un Palíndromo?<br>";
function isPalindrome($str) {
    $size = strlen($str) - 1;

    for ($i = 0; $i <= $size; $i++) {
        if ($str[$i] !== $str[$size - $i]) {
            return false;
        }
    }

    return true;
}

$palabra = "sometemos";

echo $palabra . " " . (isPalindrome($palabra) ? "" : "no ") . " es palindrome";

echo "<br><br>Desafío 4: Ordenación Manual de un Array (Bubble Sort)<br>";
function bubbleSort(&$arr) {
    $n = count($arr);

    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
}

$numeros = [5, 2, 8, 1, 9, 4];
bubbleSort($numeros);

foreach ($numeros as $n) {echo $n . " ";}

echo "<br><br>Mini-Proyecto: Simulador de Cajero Automático (ATM)<br>";

$saldo = 1000;
$pinCorrecto = "1234";
$pinUsuario = "1234";
$opcion = 4;

function menu($option) {

}

if ($pinUsuario === $pinCorrecto) {
    echo "<strong>Menú de opciones</strong>";
    echo "<br><strong>Opción 1: </strong>Consultar Saldo";
    echo "<br><strong>Opción 2: </strong>Ingresar Dinero";
    echo "<br><strong>Opción 3: </strong>Retirar Dinero";

    switch ($opcion) {
    case 1:
        echo "<br>Elegiste la opción 1<br>";
        echo "Tu saldo actual es de: " . $saldo . " €";
        break;
    case 2:
        echo "<br>Elegiste la opción 2<br>";
        $ingreso = 50;
        $saldo = $saldo + $ingreso;
        echo "Has ingresado " . $ingreso . " €. Tu nuevo saldo es de: " . $saldo . " €";
        break;
    case 3:
        echo "<br>Elegiste la opción 3<br>";
        $retiro = 100;
        if ($retiro < $saldo) {
            $saldo = $saldo - $retiro;
            echo "Has retirado " . $retiro . " €. Tu nuevo saldo es de: " . $saldo . " €";
        } else {
            echo "Saldo insuficiente para realizar la operación.";
        }
        break;
    default:
        echo "<br>Elegiste la opción " . $opcion . ", esta opción no es valida<br>";
        break;
    }
} else {
    echo "PIN incorrecto. Operación cancelada.";
}

echo "<br><br>Desafío 5: Pirámide de Asteriscos<br>";
function pyramid($height) {
    $shifts = 0;
    $result = "";
    $base = $height * 2 + 1;

    while ($base >= 0) {
        $line = str_repeat("~", $shifts) . str_repeat("*", $base);
        $result = $line . "<br>" . $result;
        $shifts = $shifts + 1;
        $base = $base - 2;
    }

    return $result;
}

echo "<code>";
echo pyramid(10);
echo "</code>";
