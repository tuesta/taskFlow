<?php
// app/data.php
$usuarios_bbdd = [
    'usuario1@taskflow.com' => [
        'id' => 1,
        'nombre' => 'Oskar Calvo',
        'password' => 'pass123' // Sin hashear (solo para aprendizaje)
    ],
    'usuario2@taskflow.com' => [
        'id' => 2,
        'nombre' => 'Ana Alumna',
        'password' => 'admin'
    ]
];

define('BBDD', $usuarios_bbdd);
