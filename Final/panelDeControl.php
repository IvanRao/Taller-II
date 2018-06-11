<?php

require("database/galeria.php");
require("funciones.php");

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
            </div>
        </header>
        <!-- %%%%%%%%%% CUERPO DE LA PAGINA %%%%%%%%% -->
        <main>
            <div id="acerca">

                <h1>Destinos</h1>

                <a href="nuevoDestino.php">
                    <button class="button" id="panel">
                        Añadir Destino  
                    </button>
                </a>

                <table class="tabla">
                    <tr>
                        <th><h2>Id</h2></th>
                        <th><h2>Nombre</h2></th>
                        <th><h2>Acciones</h2></th>
                    </tr>

                <?php mostrarPanelDeControl($galeria) ?>

                </table>

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