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
    <section>
    </section>
    
    <div class="container" >
    
    <div class="title">
        <h1>Tzontli</h1>
    </div>
    
    <div class="proposito">
        <aside class="proposito_img">
            <img src="img/peluca1.jpg" alt="" class="proposito_img"> 
        </aside>
        <p class="proposito_txt" >En el sitio conocer&aacute;s las caracter&iacute;sticas principales de diversas plantas, de flores o de frutos seleccionados para cuidados dentro de cualquier tipo de casa o departamento, con espacios amplios o reducidos. 
        Cuidando siempre que el diseño sea de tu agrado para que combine con decoraciones existentes, la variedad en espacio de los huertos con los que contamos permite que el tamaño sea el ideal para cualquier lugar donde se desee cultivar.
        </p> 
    </div>
    <img src="img/peluca1.jpg" alt="" class="img_responsive">  

    </div>
</body>
</html>