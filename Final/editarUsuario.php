<?php
    require_once("database/usuarios.php");

    if(!empty($_GET)){
		
		if(!empty($_GET["id"])){
			
			$id = $_GET["id"];
			
			foreach($usuarios as $posicion => $usuario){
				
				if($usuario["id"] == $id){
					$usuarioEditar = $usuarios[$posicion];
                }

			}
						
		}
	
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

            <h1>Editar usuario</h1>

            <div class="formulario">

                <form action="procesarEditarUsuario.php" method="post" enctype="multipart/form-data">

                    <?php

                    error_reporting(E_ALL ^ E_NOTICE);

                    $resultado = $_GET['resultado'];

                    if ($resultado=="error"):
                    $errores= "Por favor ingresa todos los datos";
                    endif;

                    if (!empty($errores)): 
                    echo "<h1>$errores</h1>";
                    endif;

                    ?>

                    <input name="id" type="hidden" value=" <?php echo $id ?>">

                    <label>Nombre:</label>
                    <input value="<?php echo $usuarioEditar["nombre"] ?>" type="text" placeholder="Ingrese nombre del usuario" name="nombre">

                    <br>
                    
                    <label>Apellido:</label>
                    <input value="<?php echo $usuarioEditar["apellido"] ?>" type="text" placeholder="Ingrese apellido del usuario" name="apellido">

                    <br>

                    <label>Mail:</label>
                    <input value="<?php echo $usuarioEditar["mail"] ?>" type="text" placeholder="Ingrese mail del usuario" name="mail">
                    
                    <br>
                    
                    <label>Rol:</label>
                    <select name="rol">
                        <?php if ($usuarioEditar["rol"] == 1) {
                            echo "<option value='0'>Usuario comun</option>";
                            echo "<option value='1' selected>Administrador</option>";
                        }else{
                            echo "<option value='0' selected>Usuario comun</option>";
                            echo "<option value='1'>Administrador</option>";
                        }
                        ?>
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