<?php
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de compras</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" ></script>
    <link rel="stylesheet" href="estilos/estilos.css">
</head>

<body>

<nav>
     <input type="checkbox" id="check">
     <label for="check" class="checkbtn">
         <i class="fas fa-bars"></i>
     </label>
     <label for="" class="logo">Tzontli</label>
     <ul>
         <li><a href="index.php">Inicio</a></li>
         <li><a href="tienda.php">Tienda</a></li>
         <li><a href="#">Nosotros</a></li>
         <li><a href="#">Contacto</a></li>
         <li><a  class="active"   href="#"  ><strong>Ver carrito <?php
                                                include_once "funciones.php";
                                                $conteo = count(obtenerIdsDeProductosEnCarrito());
                                                if ($conteo > 0) {
                                                    printf("(%d)", $conteo);
                                                }
                                                ?>&nbsp;<i class="fa fa-shopping-cart"></i></strong></a></li>
         <li><a href="productos.php">Agregar</a></li>

     </ul>
 </nav>

    <nav class="navbar is-warning" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="#">
                <img alt="" src="#" style="max-height: 80px" />
            </a>
            <button class="navbar-burger is-warning button" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </button>
        </div>
        <div class="navbar-menu">
            <div class="navbar-start">
                
            </div>
            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        
                    </div>
                </div>
                <div class="navbar-item">
                    <div class="buttons">
                        
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", () => {
            const boton = document.querySelector(".navbar-burger");
            const menu = document.querySelector(".navbar-menu");
            boton.onclick = () => {
                menu.classList.toggle("is-active");
                boton.classList.toggle("is-active");
            };
        });
    </script>
    <section class="section">