<?php
/**
 * Problema 1: Calculadora de Descuentos
 * Aplica descuentos según la categoría del producto
 */
function calcularDescuento($precio, $categoria) {
    $descuentos = [
        'electronica' => 0.15,
        'ropa' => 0.10,
        'alimentacion' => 0.05
    ];

    if (array_key_exists(strtolower($categoria), $descuentos)) {
        $descuento = $precio * $descuentos[strtolower($categoria)];
        $precioFinal = $precio - $descuento;
        return number_format($precioFinal, 2, '.', '');
    }

    return $precio; // Sin descuento si la categoría no existe
}

// Pruebas Problema 1
echo "Problema 1 - Calculadora de Descuentos:\n";
echo "Electrónica €100: €" . calcularDescuento(100, 'electronica') . "\n";
echo "Ropa €80: €" . calcularDescuento(80, 'ropa') . "\n";
echo "Alimentación €50: €" . calcularDescuento(50, 'alimentacion') . "\n";
echo "Otros €120: €" . calcularDescuento(120, 'otros') . "\n\n";

/**
 * Problema 2: El Juego "FizzBuzz"
 * Devuelve FizzBuzz, Fizz, Buzz o el número según divisibilidad
 */
function fizzBuzz($numero) {
    if ($numero % 3 === 0 && $numero % 5 === 0) {
        return "FizzBuzz";
    } elseif ($numero % 3 === 0) {
        return "Fizz";
    } elseif ($numero % 5 === 0) {
        return "Buzz";
    } else {
        return $numero;
    }
}

// Pruebas Problema 2
echo "Problema 2 - FizzBuzz:\n";
for ($i = 1; $i <= 15; $i++) {
    echo fizzBuzz($i) . " ";
}
echo "\n\n";

/**
 * Problema 3: Validador de Contraseña
 * Evalúa la fortaleza de una contraseña
 */
function validarContraseña($pass) {
    $longitud = strlen($pass);

    if ($longitud <= 8) {
        return "DEBIL";
    }

    // Verificar si tiene al menos una mayúscula y un número
    $tieneMayuscula = false;
    $tieneNumero = false;

    for ($i = 0; $i < $longitud; $i++) {
        $caracter = $pass[$i];

        if (ctype_upper($caracter)) {
            $tieneMayuscula = true;
        }

        if (is_numeric($caracter)) {
            $tieneNumero = true;
        }
    }

    if ($tieneMayuscula && $tieneNumero) {
        return "FUERTE";
    } else {
        return "MEDIA";
    }
}

// Pruebas Problema 3
echo "Problema 3 - Validador de Contraseña:\n";
echo "Contraseña 'abc': " . validarContraseña('abc') . "\n";
echo "Contraseña 'password123': " . validarContraseña('password123') . "\n";
echo "Contraseña 'Password123': " . validarContraseña('Password123') . "\n";
echo "Contraseña 'SecurePass1': " . validarContraseña('SecurePass1') . "\n\n";

/**
 * Problema 4: Encontrar el Valor Máximo
 * Encuentra el número más alto sin usar max()
 */
function encontrarMaximo($array) {
    if (empty($array)) {
        return null;
    }

    $maximo = $array[0];

    foreach ($array as $numero) {
        if ($numero > $maximo) {
            $maximo = $numero;
        }
    }

    return $maximo;
}

// Pruebas Problema 4
echo "Problema 4 - Encontrar el Valor Máximo:\n";
$numeros1 = [3, 7, 2, 9, 5, 1];
$numeros2 = [-5, -2, -10, -1];
$numeros3 = [42];

echo "Array [3,7,2,9,5,1]: " . encontrarMaximo($numeros1) . "\n";
echo "Array [-5,-2,-10,-1]: " . encontrarMaximo($numeros2) . "\n";
echo "Array [42]: " . encontrarMaximo($numeros3) . "\n";
echo "Array vacío: " . (encontrarMaximo([]) ?? 'null') . "\n\n";

/**
 * Problema 5: Filtrar Usuarios por Criterio
 * Filtra usuarios activos y mayores de edad
 */
function filtrarUsuarios($usuarios) {
    $usuariosFiltrados = [];

    foreach ($usuarios as $usuario) {
        if ($usuario['activo'] && $usuario['edad'] >= 18) {
            $usuariosFiltrados[] = $usuario;
        }
    }

    return $usuariosFiltrados;
}

// Pruebas Problema 5
echo "Problema 5 - Filtrar Usuarios por Criterio:\n";

$usuarios = [
    ['nombre' => 'Ana', 'edad' => 25, 'activo' => true],
    ['nombre' => 'Juan', 'edad' => 17, 'activo' => true],
    ['nombre' => 'Pedro', 'edad' => 35, 'activo' => false],
    ['nombre' => 'Sofía', 'edad' => 22, 'activo' => true],
];

$usuariosFiltrados = filtrarUsuarios($usuarios);

echo "Usuarios originales:\n";
foreach ($usuarios as $usuario) {
    echo "- {$usuario['nombre']} (Edad: {$usuario['edad']}, Activo: " . ($usuario['activo'] ? 'Sí' : 'No') . ")\n";
}

echo "\nUsuarios filtrados (activos y mayores de edad):\n";
foreach ($usuariosFiltrados as $usuario) {
    echo "- {$usuario['nombre']} (Edad: {$usuario['edad']}, Activo: " . ($usuario['activo'] ? 'Sí' : 'No') . ")\n";
}
