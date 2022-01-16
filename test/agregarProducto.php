<?php
require_once '../src/database.php';

if(isset($_POST)){

    //Comprobamos si todos los inputs están completados
    $nombreProducto = isset($_POST['nombreProducto']) ? mysqli_real_escape_string($connection, $_POST['nombreProducto']) : false;

    $precio = isset($_POST['precio']) ? mysqli_real_escape_string($connection, $_POST['precio']) : false;
    $precio = (float)$precio;

    $descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($connection, $_POST['descripcion']) : false;

    $url_img= isset($_POST['url_img']) ? mysqli_real_escape_string($connection, $_POST['url_img']) : false;

    $categoria = isset($_POST['categoria']) ? mysqli_real_escape_string($connection, $_POST['categoria']) : false;

    //array de errores
    $errores = array();

    if(empty($nombreProducto)){
        $errores['Nombre'] = "El nombre está vacío.";
    }

    if(empty($precio) || !is_numeric($precio)){
        $errores['Precio'] = "El precio está vacío o no es un número flotante.";
    }

    if(empty($descripcion)){
        $errores['descripcion'] = "La descripción está vacía.";
    }

    if(empty($url_img)){
        $errores['url_img'] = "La url de la imagen está vacía.";
    }

    if(count($errores) == 0){
        $sql = "INSERT INTO productos VALUES(null,'$nombreProducto','$precio','$descripcion','$url_img','$categoria')";
        $guardar = mysqli_query($connection,$sql);
        if($guardar){
            echo ("<h1>El producto se guardó correctamente</h1>");
            echo("<button onclick=\"location.href='indexAgregar.php'\">Agregar otro producto</button>");
        }else{
            echo ("<h1>No se pudo agregar el producto correctamente</h1>");
            echo("<button onclick=\"location.href='indexAgregar.php'\">Contacte con el backend</button>");
        }
    }else{
        echo ("<h1>Hubo errores en el formulario:</h1>");
        foreach($errores as $valor){
            echo ("<h2>".$valor."</h2>");
        }
        echo("<button onclick=\"location.href='indexAgregar.php'\">Volver a intentar</button>");
    }

}