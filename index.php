<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="estilo-index.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" ></script>
    <link rel="stylesheet" href="estilos/estilos.css">
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
         <li><a href="nosotros.php">Nosotros</a></li>
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
        <img class="img_banner" src="img/banner.jpg" alt="">
    </section>
    
    <div class="container" >
    
    <div class="title">
        <h1>Tzontli</h1>
    </div>
    
    <div class="proposito">
        <aside class="proposito_img">
            <img src="img/peluca1.jpg" alt="" class="proposito_img"> 
        </aside>
        <p class="proposito_txt" >Buscamos satisfacer las necesidades de los clientes a los cuáles por alguna razón médica han perdido su cabello o simplemente porque quieren lucir mejor de lo que se ven, es por ello que también ofrecemos precios accesibles, ya que sabemos que el cabello natural es muy caro y de ahí se deriva nuestra alta calidad tanto en el producto como en el servicio que le demos a los compradores. Para abrirnos a más mercado hemos decidido que nuestra venta sea 100% online y que cualquier persona del mundo nos pueda contactar y podemos brindar servicio de belleza virtual para que los clientes que no se sientan decididos completamente, tengan una opinión profesional al respecto y puedan elegir entre nuestra gama de productos.
        </p> 
        

    </div>
    <img src="img/peluca1.jpg" alt="" class="img_responsive">  
      


    </div>

    <div class="proposito"> 
        <p class="proposito_txt" >En Tzontli nos preocupa la belleza de las chicas, y mas que nada nos preocupamos porque luzcan radiantes. Somos una empresa donde vamos a hacer la compra de cabello y así mismo nosotros darle el tratamiento específico y las modificaciones de acuerdo con lo que los clientes están pidiendo.
        </p> 
        <aside class="proposito_img">
            <img src="img/inicio2.png" alt="" class="proposito_img"> 
        </aside>
    </div>
    <img src="img/inicio2.png" alt="" class="img_responsive">
</body>
</html>