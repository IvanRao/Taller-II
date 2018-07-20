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

            <h1>Login</h1>

            <div class="formulario_usuarios">

                <form action="procesarLogin.php" method="post" enctype="multipart/form-data">

                    <?php

                        error_reporting(E_ALL ^ E_NOTICE);

                        $resultado = $_GET['resultado'];

                        if ($resultado=="error"):
                            $errores= "Por favor ingresa todos los datos";
                            echo "<h1 class='error'>$errores</h1>";
                        endif;
                        if ($resultado=="exitoCrear"):
                            $errores= "Usuario creado con exito, ya se puede loguear!";
                            echo "<h1 class='exito'>$errores</h1>";
                        endif;

                    ?>                

                    <label>Mail:</label>
                    <input type="text" placeholder="Ingrese aqui su mail" name="mail">

                    <br>

                    <label>Contraseña:</label>
                    <input type="password" placeholder="Ingrese aqui su contraseña" name="contraseña">

                    <br>
                    <br>
                    
                    <button type="submit" class="enviar">Enviar</button>
                    
                    <br>
                    <br>
                    <div class="div_registrarse">
                        <a class="registrarse" href="registrarse.php">Hace click aca para registrarte!</a>
                    </div>
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