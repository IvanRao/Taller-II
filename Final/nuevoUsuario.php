<?php
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
            </div>
        </header>
        <!-- %%%%%%%%%% CUERPO DE LA PAGINA %%%%%%%%% -->

        <section id="formulario-destino">

            <h1>Nuevo usuario</h1>

            <div class="formulario">

                <form action="procesarRegistro.php" method="post" enctype="multipart/form-data">

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
                    <input type="text" placeholder="Ingrese aqui su nombre" name="nombre">

                    <br>

                    <label>Apellido:</label>
                    <input type="text" placeholder="Ingrese aqui su apellido" name="apellido">

                    <br>                    

                    <label>Mail:</label>
                    <input type="text" placeholder="Ingrese aqui su mail" name="mail">

                    <br>

                    <label>Contraseña:</label>
                    <input type="password" placeholder="Ingrese aqui su contraseña" name="contraseña">
                    
                    <br>

                    <label>Rol:</label>
                    <select name="rol">
                            <option value='0'>Usuario comun</option>
                            <option value='1'>Administrador</option>
                    </select>

                    <br>
                    <br>
                    <button type="submit" class="enviar">Enviar</button>

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
    </body>
</html>