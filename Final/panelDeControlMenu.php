<?php

require ('database/galeria.php');
require ('funciones.php');
session_start();

if(empty($_SESSION["usuario"])){
    header("Location:index.php?resultado=nolog");
}elseif ($_SESSION["usuario"]["rol"] == 0){
    header("Location:index.php?resultado=noadmin");
}

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

                <!-- <nav>

                    <?php //mostrarBotonera($categorias); ?>

                </nav> -->
            </div>
        </header>

        <!-- %%%%%%%%%% CUERPO %%%%%%%%%% -->     
        <main> 
            <div id="panel-menu">
                <?php

                    error_reporting(E_ALL ^ E_NOTICE);

                    $resultado = $_GET['resultado'];

                    if ($resultado=="exito"):
                        $errores= "Sesión iniciada con exito!";
                        echo "<h1 class='exito'>$errores</h1>";
                    endif;

                ?>
            
                <a href="panelDeControlDestinos.php">
                    <button class="button" id="panel-menu-boton">
                        Panel de control de Destinos
                    </button>
                </a>

                <a href="panelDeControlUsuarios.php">
                    <button class="button" id="panel-menu-boton">
                        Panel de control de Usuarios
                    </button>
                </a>

            </div>
        </main>
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
    </body>
</html>