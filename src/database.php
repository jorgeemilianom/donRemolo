<?php   
/*============================================================================
|       Coneción a la base de datos 
============================================================================*/ 
// require_once($URLweb.'/src/config.php');

/*======================================================
|   [Conexion SQL]
|   Guardamos la info DB del hosting para tenerlo a mano
======================================================*/
$db_server = 'localhost';
$db_user = 'root';
$db_password = '';
$db_db = 'p_donremolo';

//Conectamos al server mysql
$connection = new mysqli($db_server, $db_user, $db_password, $db_db);
if($connection->connect_error){
    echo '<center>Hay un problema en el servidor. Contacta con un administrador, gracias.</center>';
    die();
}


?>