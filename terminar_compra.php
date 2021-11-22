

<?php

#include_once "funciones.php";
#$productos = obtenerProductosEnCarrito();
# Puede que solo quieras los ids, para ello invoca a obtenerIdsDeProductosEnCarrito();
#var_dump($productos);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="estilo-index.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" ></script>
</head>
<header>
 <nav>
     <input type="checkbox" id="check">
     <label for="check" class="checkbtn">
         <i class="fas fa-bars"></i>
     </label>
     <label for="" class="logo">Tzontli</label>
     <ul>
     <li><a class="active" href="index.php">Inicio</a></li>
         <li><a href="tienda.php">Tienda</a></li>
         <li><a href="#">Nosotros</a></li>
         <li><a href="#">Contacto</a></li>
         <li><a href="ver_carrito.php" class="button is-success"  ><strong>Ver carrito <?php
                                                include_once "funciones.php";
                                                $conteo = count(obtenerIdsDeProductosEnCarrito());
                                                if ($conteo > 0) {
                                                    printf("(%d)", $conteo);
                                                }
                                                ?>&nbsp;<i class="fa fa-shopping-cart"></i></strong></a></li></a></li>
         <li><a href="productos.php">Agregar</a></li>
     </ul>
 </nav>
</header>
<body>
    <p>La informaci&oacute;n de pago se envio a tu correo electrónico</p>
</body>
</html>