<?php
$tasks = [
    ['title' => 'Revisar documentación de PHP', 'completed' => false, 'priority' => 'media'],
    ['title' => 'Implementar bucle foreach', 'completed' => true, 'priority' => 'alta'],
    ['title' => 'Aplicar estilos condicionales', 'completed' => false, 'priority' => 'baja'],
    ['title' => 'Verificar funcionalidad', 'completed' => false, 'priority' => 'media'],
    ['title' => 'Preparar entrega', 'completed' => true, 'priority' => 'alta'],
];
?>

<?php include '../app/views/header.php'; ?>

<h2>Tareas Pendientes</h2>
<ul>
    <?php
    foreach ($tasks as $task) {
        $taskClasses = 'task-item';

        if ($task['completed']) {
            $taskClasses .= ' completed';
        }

        switch ($task['priority']) {
            case 'alta':
                $taskClasses .= ' priority-alta';
                break;
            case 'media':
                $taskClasses .= ' priority-media';
                break;
            case 'baja':
                $taskClasses .= ' priority-baja';
                break;
        }

        echo '<li class="' . $taskClasses . '">' . $task['title'] . '</li>';
    }
    ?>
</ul>

<?php include '../app/views/footer.php'; ?>
