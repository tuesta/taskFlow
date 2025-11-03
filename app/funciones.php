<?php

function obtenerClasePrioridad($prioridad) {
    return match ($prioridad) {
        'alta' => ' priority-alta',
        'media' => ' priority-media',
        'baja' => ' priority-baja',
        default => '',
    };
}

function renderizarTarea($tarea) {
    $class = 'task-item'
        . ($tarea['completado'] ? ' completed' : '')
        . obtenerClasePrioridad($tarea['prioridad']);

    return '<li class="'. htmlspecialchars($class) . '">' . htmlspecialchars($tarea['titulo']) . '</li>';
}
