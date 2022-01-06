<?php

if(isset($_POST['datosDB']) || 1){
    
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