<?php   
/*============================================================================
|       Lógica y preparación de datos a mostrar
============================================================================*/ 
require('functions.php');


class products {

    public $product;

    public function getProduct(){
        // code
    }

}

cargarDatos(){
    $_SESSION['productos'] = new products;


}

?>