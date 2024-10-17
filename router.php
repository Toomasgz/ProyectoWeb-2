<?php
require_once 'tareas.php';
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
$action = 'mostrar'; //accion por defecto
if (!empty($_GET['action'])){
    $action = $_GET['action'];
}

// Listar -> mostarTareas();
// agregar -> agregarTarea(); o addTask();



//Tareas:
//Tarea 1: Mostrar listaod de items: mostrarItems();


// parsea la accion para eparar accion real de parametros
$params = explode('/',$action);

switch ($params[0]){
    case 'mostrar':
        mostrarItems();
        break;
    default:
        echo "404 Page Not Found";
        break;
}