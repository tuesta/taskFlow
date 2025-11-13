<?php
// tests/AuthTest.php - Pruebas Unitarias para la lógica de autenticación
use PHPUnit\Framework\TestCase;

// Incluir los archivos con la lógica que queremos probar
require_once __DIR__ . '/../app/data.php';
require_once __DIR__ . '/../app/controllers/AuthController.php';

class AuthTest extends TestCase {
    /**
     * PRUEBA UNITARIA: Camino Feliz (login correcto)
     * Verifica que handleLogin devuelve true con credenciales válidas
     */
    public function testLoginConCredencialesValidas()
    {
        // ACTUAR: Llamar a la función con datos correctos
        $resultado = handleLogin('usuario1@taskflow.com', 'pass123', BBDD);

        // ASERCIÓN: Afirmar que el resultado es verdadero
        $this->assertTrue($resultado);
    }

    /**
     * PRUEBA UNITARIA: Camino Triste (login incorrecto)
     * Verifica que handleLogin devuelve false con credenciales inválidas
     */
    public function testLoginConCredencialesInvalidas()
    {
        // ACTUAR: Llamar con contraseña errónea
        $resultado = handleLogin('usuario1@taskflow.com', 'pass_erroneo', BBDD);

        // ASERCIÓN: Afirmar que el resultado es falso
        $this->assertFalse($resultado);
    }
}
