<?php
    require ('arrays.php');
    require ('funciones.php');
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
        
    <main>
        
    <h1 style="margin-left:10px">Reserva:</h1>
        
    <?php

        $nombreprincipal = $apellido = $email = $destino = "";
        $transporte = $fechaviaje = $adultos = $ninos = $pedidos = "";

        if (!empty($_POST["nombre"])) {
            $nombreprincipal = ($_POST["nombre"]);
        }else{
            header("Location:index.php?seccion=reservas&resultado=error");
        }
        
        if (!empty($_POST["apellido"])) {
            $apellido = ($_POST["apellido"]);
        }else{
            header("Location:index.php?seccion=reservas&resultado=error");
        }
        
        if (!empty($_POST["email"])) {
            $email = ($_POST["email"]);
        }else{
            header("Location:index.php?seccion=reservas&resultado=error");
        }
        
        if (!empty($_POST["destino"])) {
            $destino = ($_POST["destino"]);
        }else{
            header("Location:index.php?seccion=reservas&resultado=error");
        }
        
        if (!empty($_POST["transporte"])) {
            $transporte = ($_POST["transporte"]);
        }else{
            header("Location:index.php?seccion=reservas&resultado=error");
        }
        
        if (!empty($_POST["fechaviaje"])) {
            $fechaviaje = ($_POST["fechaviaje"]);
            var_dump($fechaviaje);
        }else{
            header("Location:index.php?seccion=reservas&resultado=error");
        }
        
        if (!empty($_POST["adultos"])) {
            $adultos = ($_POST["adultos"]);
        }else{
            header("Location:index.php?seccion=reservas&resultado=error");
        }
        
        if (!empty($_POST["ninos"])) {
            $ninos = ($_POST["ninos"]);
        }else{
            header("Location:index.php?seccion=reservas&resultado=error");
        }

        if (!empty($_POST["pedidos"])) {
            $pedidos = ($_POST["pedidos"]);
        }else{
            $pedidos = "No hay pedidos especiales.";
        }

    ?>

    <div class"procesar" style="margin-left:10px">
    <?php

        echo "Nombre: ".$nombreprincipal;
        echo "<br>";
        echo "Apellido: ".$apellido;
        echo "<br>";
        echo "Mail: ".$email;
        echo "<br>";
        echo "Destino: ".$destino;
        echo "<br>";
        echo "Transporte: ".$transporte;
        echo "<br>";
        echo "Fecha Salida: ".$fechaviaje;
        echo "<br>";
        echo "Cantidad de Adultos: ".$adultos;
        echo "<br>";
        echo "Cantidad de Niños: ".$ninos;
        if ( !empty($_POST["extra"]) && is_array($_POST["extra"]) ) { 
            echo "<p>Servicios Extra: </p>";
            echo "<ul>";
            foreach ($_POST["extra"] as $extra ) { 
                    echo "<li>";
                    echo $extra; 
                    echo "</li>"; 
             }
             echo "</ul>";
        }
        echo "Pedidos Especiales: ".$pedidos;

    ?>

    </div>
        
    </main>
    <!-- %%%%%%%%%% FOOTER %%%%%%%%%% -->                    
    <!-- <footer>
        <h2>Contacto:</h2>
        <ul>
            <li>Email: requiemturismo@gmail.com</li>
            <li>Telefono: 156-866-7514</li>
            <li>Dirección: Av. Corrientes 2037, 1001 CABA</li>
        </ul>
        <br>
        <p>Ivan Rao™<p>
    </footer>                                                       -->
    </body>
</html>