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
        $products [$count]->setimg($data['url_img']);
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

    try{
        $count = 0;
        while($count < count($arrayAsociativo)){
            switch($arrayAsociativo[$count]->category){
                case 'Postres':{
                    array_push($_SESSION['postres'],$arrayAsociativo[$count]);
                    break;
                }
                case 'Pizzas':{
                    array_push($_SESSION['pizzas'],$arrayAsociativo[$count]);
                    break;
                }
                case 'Bebidas':{
                    array_push($_SESSION['bebidas'],$arrayAsociativo[$count]);
                    break;
                }
                case 'Empanadas':{
                    array_push($_SESSION['empanadas'],$arrayAsociativo[$count]);
                    break;
                }
            }
            $count++;
        }
        return true;
    }
    catch(Exception $e){
        echo($e->getMessage());
        return false;
    }
    // debe retornar un boolean en caso de que se haya hecho el filtraje correctamente
}

function OrdenarPedido($productosARRAY){
    // Ordenar por categoria y ASC

    $_SESSION['pedido'] = [];
    
    try{
        for($i=0;$i<4;$i++){
            $count = 0;
            while($count < count($productosARRAY)){
                if($productosARRAY[$count]->category == 'Pizzas' && $i == 0){
                    array_push($_SESSION['pedido'],$productosARRAY[$count]);
                }elseif($productosARRAY[$count]->category == 'Empanadas' && $i == 1){
                    array_push($_SESSION['pedido'],$productosARRAY[$count]);
                }elseif($productosARRAY[$count]->category == 'Bebidas' && $i == 2){
                    array_push($_SESSION['pedido'],$productosARRAY[$count]);
                }elseif($productosARRAY[$count]->category == 'Postres' && $i == 3){
                    array_push($_SESSION['pedido'],$productosARRAY[$count]);
                }
                $count++;
            }
        }
        return true;
    }
    catch(Exception $e){
        echo($e->getMessage());
        return false;
    }
    
}

function consumoTotal($pedidos){
    try {
        // $pedidos = [
        //     [ // 0
        //         'pruducto'=>'empanada',
        //         'price'=>50,
        //         'url'=>'https://unaricareceta.com/wp-content/uploads/2020',
        //         'cantidad'=>2
        //     ],
        //     [ // 1
        //         'pruducto'=>'empanada',
        //         'price'=>50,
        //         'url'=>'https://unaricareceta.com/wp-content/uploads/2020',
        //         'cantidad'=>2
        //     ],
        //     [ // 2
        //         'pruducto'=>'empanada',
        //         'price'=>50,
        //         'url'=>'https://unaricareceta.com/wp-content/uploads/2020',
        //         'cantidad'=>2
        //     ]
        // ];
        $sumatoria=0;
        $count = 0;
    
        while($count < count($pedidos)){
            $sumatoria += $pedidos[$count]['price'] * $pedidos[$count]['cantidad'];
            $count ++;
        }
            $sumatoria += $pedidos[$count]['price'] * $pedidos[$count]['cantidad'];

        $_SESSION['totalCompra'];
        return true;

    }catch(Exception $e){
        echo($e->getMessage());
        return false;
    }
}

function generarEnlaceWSP($number,$menssage){
    
    $menssage = str_replace(' ','+',$menssage);

    if (empty($number and $menssage) == false) {
        echo "https://api.whatsapp.com/send/?phone=".$number.'&text='.$menssage.'&app_absent=0';
    }
}

function t($arraytest){
    $count = 0;
    while($count < count($arraytest)){
        print_r($arraytest[$count]);
        echo '<hr><br>';
        $count++;
    }
}
?>