<?php
require_once 'db.php';

/*function delete($id) {
    //DELETE FROM transactions WHere transactions_id x ($id);
     /*Abrimos una Conexion*/ 
    // $db = new PDO('mysql:host=localhost;dbname=copia_club_embajadores;charset=utf8','root','');

     /*Enviamos la consulta y nos devuelve el resultado*/
    /*enviamos la consulta  DELETE FROM transactions WHere transactions_id x ($id);
    /*$sentencia = db->prepare("sekect * from tarea");*/
   // $query = $db->prepare("DELETE FROM deportes WHERE id = ?");
    //$query->execute([$id]);//evitar la inyeccion SQL
//}

/*
echo "<h1>Socios</h1>";
echo "<h2>Lista de Socios</h2>";
delete(1);
    copiaClub();
    */
function mostrarItems(){
    $tarea = getClub();


    require 'header.phtml'

    /*foreach ($tarea as $tareas){
        echo $tareas->nombre;
    }*/
    ?>
    <ul>
    <?php foreach($tarea as $tareas){ ?>
        <li class="list-group-item">
            <b><?php echo $tareas->nombre; ?> </b> <?php echo $tareas->apellido; ?>
           
        </li>

    <?php } ?>

    </ul>
    <?php
}


?>