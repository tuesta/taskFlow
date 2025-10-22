<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskFlow</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100vh;
        }
        main {
            width: 800px;
            margin: 2rem auto;
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        footer {
            display: flex;
            background: black;
            color: white;
            padding: 1rem 2rem;
        }

        .task-item {
            padding: 10px;
            border-left: 4px solid #ccc; /* Color por defecto o para prioridad media */
            margin-bottom: 10px;
            background-color: #fafafa;
        }
        .task-item.completed {
            text-decoration: line-through;
            color: #888;
        }
        .task-item.priority-alta {
            border-left-color: #e74c3c; /* Rojo para alta prioridad */
        }
        .task-item.priority-media {
            border-left-color: #f39c12; /* Naranja para media prioridad */
        }
        .task-item.priority-baja {
            border-left-color: #27ae60; /* Verde para baja prioridad */
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        h2 {
            color: #333;
        }
    </style>
</head>
<body>
    <main>
