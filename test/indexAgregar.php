<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <title>Agregar_comida</title>
</head>

<body>
    <div>
        <form action="agregarProducto.php" method="POST">
            <label for="nombreProducto">Nombre del producto</label>
            <input type="text" name="nombreProducto">
            <br>

            <label for="precio">Precio</label>
            <input type="text" name="precio">
            <br>

            <label for="descripcion">Descripción</label>
            <input type="text" name="descripcion">
            <br>

            <label for="url_img">URL de la imagen del producto</label>
            <input type="text" name="url_img">
            <br>

            <label for="categoria">Categoría</label>
            <select name="categoria">
                <option>Pizzas</option>
                <option>Empanadas</option>
                <option>Bebidas</option>
                <option>Postres</option>
            </select>
            <br>

            <input type="submit" name="submit" value="Agregar">
        </form>
    </div>
</body>

</html>