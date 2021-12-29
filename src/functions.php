<?php   
/*============================================================================
|       Funciones auxiliares
============================================================================*/ 
require('database.php');
require('entitys/product.php');

function obtenerProductos(){
    // DB
    GLOBAL $connection;
    $query = "SELECT * FROM productos";
    $obj = mysqli_query($connection, $query);

    // Array for Entity
    $products = [];

    // contador
    $count = 0;

    // Recorremos el objeto que devolvió la DB y hacemos FETCH_ASSOC para hacerlo un array asociativo
    while($data = $obj->fetch_assoc()){
        $products [$count] = new product();
        $products [$count]->setid($data['id']);
        $products [$count]->setproduct($data['product']);
        $products [$count]->setprice($data['price']);
        $products [$count]->setdescription($data['description']);
        $products [$count]->setimg($data['img']);
        $products [$count]->setcategory($data['category']);

        $count ++;
    }

    // Retorna un array con todos los productos de la DB
    return $products;
}

function filtrarCategorias( $arrayAsociativo ){
    //  La función debe filtrar los datos que vienen en un ARRAY 
    // Array tipo   $product[0]->product    $product[0]->price  $product[0]->description    ETC   

    $_SESSION['empanadas'] = [] ;
    $_SESSION['pizzas'] = [] ;
    $_SESSION['bebidas'] = [] ;
    $_SESSION['postres'] = [] ;

    // debe retornar un boolean en caso de que se haya hecho el filtraje correctamente
}

function OrdenarPedido($productosARRAY){
    // Ordenar por categoria y ASC

    $_SESSION['pedido'] = '';
}

function consumoTotal(/*colocar variable*/){
    $total = 0;
    while ($total <= 10) {
        # code...
    }
}

function generarEnlaceWSP($number,$menssage){
    $number = '';
    $menssage = ''; //ingresar la lista del pedido
    $menssage = str_replace(' ','+',$menssage);

    if (!empty($number and $menssage)) {
        return "https://api.whatsapp.com/send/?phone=".$number.'&text='.$menssage.'&app_absent=0';
    }
}
?>