<?php
require('../src/core.php');

cargarDatos();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>$productosCategorias</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/css/stylesJaime.css" />
    <link rel="stylesheet" href="../assets/css/styles.css" />
  </head>
  <body>
    <div class="content">
      <div class="cabecera">
        <img src="../assets/img/header/headerCompleto.svg" alt="" />
      </div>

      <div class="headerIconos">
        <a href="?category=pizzas">
          <div class="bloqueNaranja">
            <img src="../assets/img/tapBar/botonPizzaINactivo.svg" alt="" />
          </div>
        </a>
        <a href="?category=empanadas">
          <div class="bloqueNaranja">
            <img src="../assets/img/tapBar/botonEmpanadaINactivo.svg" alt="" />
          </div>
        </a>
        <a href="?category=bebidas">
          <div class="bloqueNaranja">
            <img src="../assets/img/tapBar/botonBebidaINactivo.svg" alt="" />
          </div>
        </a>
        <a href="?category=postres">
          <div class="bloqueNaranja">
            <img src="../assets/img/tapBar/botonPostreINactivo.svg" alt="" />
          </div>
        </a>
      </div>

      <!-- <div class="listaPedidos">
        <a href="">
          <div class="contenedorPedidos">
            <div>
              <img src="../assets/img/pizzas/muzzarella.svg" alt="" />
            </div>
            <div class="texto">
              <p><strong>Muzzarella</strong></p>
              <p>Muzarella | Orégano | Aceitunas | Aceite de oliva</p>
              <p><strong>$1134</strong></p>
            </div>
          </div>
        </a>
      </div> -->

<?php

  $c = filtrarCategorias( $_SESSION['products'] );
  // $_SESSION['empanadas'] = [] ;
  // $_SESSION['pizzas'] = [] ;
  // $_SESSION['bebidas'] = [] ;
  // $_SESSION['postres'] = [] ;
  $category = $_SESSION['products'];

  if($_GET['category'] == 'postres'){
    $category = $_SESSION['postres'];
  }
  if($_GET['category'] == 'empanadas'){
    $category = $_SESSION['empanadas'];
  }
  if($_GET['category'] == 'bebidas'){
    $category = $_SESSION['bebidas'];
  }
  if($_GET['category'] == 'pizzas'){
    $category = $_SESSION['pizzas'];
  }

    foreach($category AS $producto){
?>

    <div class="listaPedidos">
        <a href="">
          <div class="contenedorPedidos">
            <div>
              <img src="../<?= $producto->img ?>" alt="" />
            </div>
            <div class="texto">
              <p><strong><?= $producto->product ?></strong></p>
              <p><?= $producto->description ?></p>
              <p><strong>$<?= $producto->price ?></strong></p>
            </div>
          </div>
        </a>
      </div>


<?php
    }
  
?>
    </div>

    <!-- Script js -->
    <script
      src="https://code.jquery.com/jquery-3.6.0.js"
      integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
      crossorigin="anonymous"
    ></script>
    <!-- Custom JS -->
    <!-- <script src="../src/ajax/productos.js"></script> -->
  </body>
</html>
