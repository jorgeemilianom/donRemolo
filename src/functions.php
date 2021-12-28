<?php   
/*============================================================================
|       Funciones auxiliares
============================================================================*/ 
require('database.php');



function filtrarCategorias( $arrayAsociativo ){
    //  La función debe filtrar los datos que vienen en un ARRAY Asociativo

    $_SESSION['empanadas'] = '';
    $_SESSION['pizzas'] = '';
    $_SESSION['bebidas'] = '';
    $_SESSION['postres'] = '';

    // debe retornar un bool
}

function OrdenarPedido($productosARRAY){
    // Ordenar por categoria y ASC

    $_SESSION['pedido'] = '';
}

function consumoTotal(){

}
?>