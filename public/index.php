<?php
// public/index.php

require_once '../app/funciones.php';
require_once '../app/data.php';
require_once '../app/controllers/AuthController.php';

// 2. LÓGICA DEL ROUTER
$accion = $_GET['accion'] ?? 'login';

// Switch para enrutar según la acción
switch ($accion) {
    case 'login':
        // Lógica para procesar el envío del formulario de login
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            if (handleLogin($email, $password, $usuarios_bbdd)) {
                // POST-REDIRECT-GET
                header('Location: index.php?accion=dashboard');
                exit;
            } else { $error = "Credenciales incorrectas.";}
        }

        // Si no es POST o falló el login, mostrar la vista
        include '../app/views/login.view.php';
        break;

    case 'dashboard':
        // PROTECCIÓN DE RUTA
        if (!checkAuth()) {
            header('Location: index.php?accion=login');
            exit;
        }

        // Si estamos autenticados, preparamos los datos para la vista
        $tareas = [
            ['titulo' => 'Implementar Login', 'completado' => true, 'prioridad' => 'alta'],
            ['titulo' => 'Añadir Pruebas Unitarias', 'completado' => false, 'prioridad' => 'media']
        ];

        // Cargar la vista del dashboard
        include '../app/views/tareas.view.php';
        break;

    case 'logout':
        // Cierra sesión y redirige
        handleLogout();
        break;

    default:
        // Manejo de error 404
        http_response_code(404);
        echo "Error 404: Página no encontrada.";
        break;
}
