<?php
require('../database.php');

if(isset($_POST['datosDB']) || 1){
    
    // DB
    GLOBAL $connection;
    $query = "SELECT * FROM productos";
    $obj = mysqli_query($connection, $query);
    $productos = [];
    $n = 0;
    while($data = $obj->fetch_assoc()){
        $productos[$n]['id'] = $data['id']; 
        $productos[$n]['product'] = $data['product']; 
        $productos[$n]['price'] = $data['price']; 
        $productos[$n]['description'] = $data['description']; 
        $productos[$n]['url_img'] = $data['url_img']; 
        $productos[$n]['category'] = $data['category']; 
        $n ++;
    }
    
    $json = json_encode($productos);
    echo $json;
}


?>