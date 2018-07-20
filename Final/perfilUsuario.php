<?php
require ('database/galeria.php');
require ('funciones.php');
session_start();

?>
<html>
    <head>
        <title>
            Requiem Turismo
        </title>
        <link href="style/common.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch" rel="stylesheet">
        <meta charset ="utf-8">

        <!-- JQUERIES-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="script/common.js"></script>

    </head>
    <body>
        <!-- %%%%%%%%%% CABECERA %%%%%%%%%% -->

        <header>
            <div class="botonera">
                <div class="logo">
                    <a href="index.php?seccion=inicio">
                        <p class="requiem">Requiem</p>
                        <p class="turismo">Turismo</p>
                        <i class="material-icons">&#xE195;</i>
                    </a>
                </div>

                <nav>

                    <?php mostrarBotonera($categorias); ?>

                </nav>
            </div>
        </header>
        <!-- %%%%%%%%%% CUERPO DE LA PAGINA %%%%%%%%% -->

        <section id="formulario-destino">

            <h1>Perfil de <?php echo $_SESSION["usuario"]["nombre"]. " " .$_SESSION["usuario"]["apellido"] ?></h1>

            <div class="formulario_usuarios">

                <form action="procesarEditarUsuario.php" method="post" enctype="multipart/form-data">

                    <?php

                        error_reporting(E_ALL ^ E_NOTICE);

                        $resultado = $_GET['resultado'];

                        if ($resultado=="error"):
                            $errores= "Por favor ingresa todos los datos";
                            echo "<h1 class='error'>$errores</h1>";
                        endif;
                        if ($resultado=="exito"):
                            $errores= "Usuario modificado con exito!";
                            echo "<h1 class='exito'>$errores</h1>";
                        endif;

                    ?>

                    <label>Nombre:</label>
                    <input type="text" value="<?php echo $_SESSION["usuario"]["nombre"];?>" name="nombre">

                    <br>

                    <label>Apellido:</label>
                    <input type="text" value="<?php echo $_SESSION["usuario"]["apellido"];?>" name="apellido">

                    <br>                    

                    <label>Mail:</label>
                    <input type="text" value="<?php echo $_SESSION["usuario"]["mail"];?>" name="mail">

                    <br>

                    <label>Contraseña:</label>
                    <input type="password" placeholder="Ingrese aqui su contraseña" name="contraseña">

                    <br>
                    <br>
                    <button type="submit" class="enviar">Modificar</button>

                </form>        
            </div>

        </section>

        <!-- %%%%%%%%%% FOOTER %%%%%%%%%% -->                    
        <footer>
            <h2>Contacto:</h2>
            <ul>
                <li>Email: requiemturismo@gmail.com</li>
                <li>Telefono: 156-866-7514</li>
                <li>Dirección: Av. Corrientes 2037, 1001 CABA</li>
            </ul>
            <br>
            <p>Ivan Rao™<p>
        </footer>  
        <script>

            function menuDesplegable() {
                document.getElementById("myDropdown").classList.toggle("show");
            }

            window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {

                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
                }
            }
            }
        </script>                                                     
    </body>
</html>