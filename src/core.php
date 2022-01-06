<?php   
/*============================================================================
|       Lógica y preparación de datos a mostrar
============================================================================*/ 
require($URLweb.'/src/functions.php');

function cargarDatos(){
    $_SESSION['products'] = obtenerProductos();
    
    // TODO ANDANDO OK

    // var_dump($_SESSION['products']);
    // die();
}

cargarDatos();
?>