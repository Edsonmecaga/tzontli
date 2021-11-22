<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros</title>
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
     <li><a href="index.php">Inicio</a></li>
         <li><a href="tienda.php">Tienda</a></li>
         <li><a class="active" href="nosotros.php">Nosotros</a></li>
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
    <!-- ... -->



    <div class="titulo" ><!--  -->
        <h4>¿Qui&eacute;nes Somos?</h4> <!-- titulo de experiencia en etiqueta h2 -->
    </div>
    <div class="purpose"><!-- div para todo l relacionado al propósito de la empresa -->
        <aside ><!-- Aside de la imagen -->
            <img src="img/somos.jpg" alt="Estudiantes discutiendo un proyecto" class="purpose_img"><!-- Imagen ilustrativa al propósito -->
        </aside>
        <p class="purpose_txt" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea perferendis odit incidunt, tempora nihil similique autem provident, repellendus magnam officiis eos atque vel ratione blanditiis laboriosam quas modi laborum quasi!

            <br> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi expedita quae vel magnam, autem fugiat neque necessitatibus corrupti ratione ab consectetur culpa nobis cupiditate rem aspernatur dolores! Ut, dolores consequatur.
            </p><!-- Propósito de la empresa -->
    </div>
    
    <!-- Vision -->

    <div class="titulo" ><!-- clase para los titulos de la página -->
        <h4>Visión</h4> <!-- titulo de experiencia en etiqueta h2 -->
    </div>
    <div class="vision"><!-- Clase para la visión de la empresa -->
        <aside ><!-- Aside para el texto de la visi[on] -->
            <p class="vision_txt" >Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime cupiditate minima pariatur! Doloribus cum molestiae quibusdam quod. Esse tempore nemo commodi, molestias aspernatur temporibus fugit natus quod expedita, provident labore.

                <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum velit a quo, vero atque ipsa ut distinctio quibusdam fugit maiores accusamus iste, voluptatibus voluptatum hic aut! Adipisci fuga laboriosam porro!
                </p><!-- Visi[on de la empresa -->
        </aside>
        <img src="img/vison.jpeg" alt="Estudiante diseñando" class="vision_img"><!-- Imagen ilustrativa -->
    </div>

    <!-- Mision -->


    <div class="titulo" ><!-- Clase para los t[itulos de la pagina -->
        <h4>Misi&oacute;n</h4> <!-- titulo de experiencia en etiqueta h2 -->
    </div>
    <div class="mission">
        <aside >
            <img src="img/mision.jpg" alt="Estudiante haciendo un reporte" class="mission_img">
        </aside>
        <p class="mission_txt" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate porro quaerat quidem aut quo aperiam nulla deserunt maiores dolorem, fugiat totam perspiciatis esse iste magni dolores sunt ipsam rerum culpa.</p>
    </div>
    
        <!-- Descripción general del equipo -->  
        <hr/><!-- Etiqueta para separar parrafos -->
        
        <div class="titulo" ><!--  -->
            <h4>Integrantes</h4> <!-- titulo de experiencia en etiqueta h2 -->
        </div>

        <section>
        <div class="titulo">
            <h2>Daniel</h2><!-- Nombre 1 de integrante  -->
        </div>
        </div>
        <div class="team_img">
            <img src="img/daniel.jpg" alt=" foto de la primer integrante del equipo" class="team_img" ><!-- Fotografia integrante 1  -->
        </div>
        
        <p class="profile" >Lic. en Informatica Administrativa </p><!-- Descripcion de estudios realizados -->
        <p class="profile_txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam porro officia aut voluptate, sint non exercitationem delectus </p><br>
        <p class="profile_txt" >Co-fundadora de HFEEL</p> <br><!-- Etiqueta para producir un salto de linea  -->
        <p class="profile_txt">Co-creadora de Por Mx</p><br><!-- Etiqueta para producir un salto de linea  -->
        <p class="profile_txt">Integrante de Tzontli</p>

        <div class="titulo">
            <h2>Diana</h2><!-- Nombre de integrante 2 --> 
        </div>
        </div>
        <div class="team_img">
        <img src="img/diana.jpg" alt= "foto de la segunda integrante del equipo" class="team_img" ><!-- Fotografia integrante 1  -->
        </div>

    <p class="profile" >Lic. en Informática Administrativa </p> <br> <!-- Descripcion de estudios realizados -->
    <p class="profile_txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat ab laudantium nisi, laboriosam beatae expedita </p><br>
    <p class="profile_txt" >Participante de Innovaccion Virtual</p> <br><!-- Etiqueta para producir un salto de linea  -->
    <p class="profile_txt">Microsoft Embbasador </p><br><!-- Etiqueta para producir un salto de linea  -->
    <p class="profile_txt">Integrante de Tzontli</p>

            <div class="titulo">
                <h2>Edson</h2><!-- Nombre de integrante 2 --> 
        </div>
        </div>
        <div class="team_img">
        <img src="img/edson.jpg" alt=" foto de la primer integrante del equipo" class="team_img" ><!-- Fotografia integrante 1  -->
        </div>
    
        <p class="profile" >Lic. en Informática Administrativa </p> <br> <!-- Descripcion de estudios realizados -->
        <p class="profile_txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat ab laudantium nisi, laboriosam beatae expedita </p><br>
        <p class="profile_txt" >Participante de Innovaccion Virtual</p> <br><!-- Etiqueta para producir un salto de linea  -->
        <p class="profile_txt">Microsoft Embbasador </p><br><!-- Etiqueta para producir un salto de linea  -->
        <p class="profile_txt">Integrante de Tzontli</p>


        <div class="titulo">
            <h2>Janteh</h2><!-- Nombre de integrante 2 -->
        </div>

        <div class="team_img">
            <img src="img/janeth.jpg" alt=" foto de la primer integrante del equipo" class="team_img" ><!-- Fotografia integrante 1  -->
            </div>
        
            <p class="profile" >Lic. en Informática Administrativa </p> <br> <!-- Descripcion de estudios realizados -->
            <p class="profile_txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat ab laudantium nisi, laboriosam beatae expedita </p><br>
            <p class="profile_txt" >Participante de Hackaton Space</p> <br><!-- Etiqueta para producir un salto de linea  -->
            <p class="profile_txt">Estudiante en green</p><br><!-- Etiqueta para producir un salto de linea  -->
            <p class="profile_txt">Integrante de Tzontli</p>
        
        
        <div class="titulo">
        <h2>Yesabel</h2><!-- Nombre de integrante 2 -->
        </div>

        <div class="team_img">
            <img src="img/yesabel.jpg" alt=" foto de la primer integrante del equipo" class="team_img" ><!-- Fotografia integrante 1  -->
            </div>
        
            <p class="profile" >Lic. en Informática Administrativa </p> <br> <!-- Descripcion de estudios realizados -->
            <p class="profile_txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat ab laudantium nisi, laboriosam beatae expedita </p><br>
            <p class="profile_txt" >Participante de Hackaton Space</p> <br><!-- Etiqueta para producir un salto de linea  -->
            <p class="profile_txt">Estudiante en green</p><br><!-- Etiqueta para producir un salto de linea  -->
            <p class="profile_txt">Integrante de Tzontli</p>
        
        
        


     </section>
    

    </body>