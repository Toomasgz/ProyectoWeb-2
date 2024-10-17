<?php

function getClub(){
    /*Abrimos una Conexion*/ 
    $db = new PDO('mysql:host=localhost;dbname=copia_club_embajadores;charset=utf8','root','');

    /*Enviamos la consulta y nos devuelve el resultado*/
    /*enviamos la consulta ( "sekect * from tarea" )*/ 
    /*$sentencia = db->prepare("sekect * from tarea");*/
    $query = $db->prepare('SELECT * FROM socios');

    $query->execute();
    /*Obtengo todos los daos que arroja la query*/ 
    $tareas= $query->fetchALL(PDO::FETCH_OBJ);

    return $tareas;

    
    //var_dump($tareas);
    /*Procesamos los datos para generar el HTML*/
    /*foreach($tareas as $tareas){
        echo $tareas->nombre;
    }
    /*cerrramos conexion*
    echo "<h1>Socios</h1>";
    echo "<ul>";
    foreach($tareas as $tareas){
        echo "<li>$tareas->id - $tareas->Deportes</li>";
    }
    echo "</ul>";
    */
}

?>