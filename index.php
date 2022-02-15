<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    
<div class="content ">
    <div class="cabecera">
        <img src="assets/img/header/headerCompleto.svg" alt="">
    </div>
    <div class="titular">
        Nuestro menu
    </div>
    
    <div class="categorias">
        <a href="page/productos.php?category=pizzas">
            <div class="caja ">
                <div class="imagen"><img src="assets/img/botonesHome/pizzaBoton.svg" alt=""></div>
                <div class="title">Pizzas</div>
            </div>
        </a>
        <a href="page/productos.php?category=empanadas">
            <div class="caja ">
                <div class="imagen"><img src="assets/img/botonesHome/empanadasBoton.svg" alt=""></div>
                <div class="title">Empanadas</div>
            </div>
        </a>
        <a href="page/productos.php?category=bebidas">
            <div class="caja ">
                <div class="imagen"><img src="assets/img/botonesHome/bebidaBoton.svg" alt=""></div>
                <div class="title">Bebidas</div>
            </div>
        </a>
        <a href="page/productos.php?category=postres">
            <div class="caja ">
                <div class="imagen"><img src="assets/img/botonesHome/postreBoton.svg" alt=""></div>
                <div class="title">Postres</div>
            </div>
        </a>
    </div>
    
    <div class="banner">
        <img src="assets/img/loadApp/CompSlogan.svg" alt="">
    </div>
</div>
 
<!-- Script js -->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<!-- Custom JS -->
<script src="src/ajax/productos.js"></script>
</body>
</html>