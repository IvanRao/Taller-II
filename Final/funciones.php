
<?php 
require("errores.php"); 

// <!-- FUNCION PARA MOSTRAR LAS FOTOS DEL ARRAY -->

function mostrarGaleria($galeria){
    foreach ($galeria as $foto => $valor) { 
        echo "<div class='destinos'>";

        echo "<img src='$valor[url]'>";
        echo "<p>$valor[nombre]</p>";

        if(file_exists("images/$valor[nombre]/descripcion.txt")){

            $texto = file_get_contents("images/$valor[nombre]/descripcion.txt");

            echo "<div class='descripcion'>";
            echo "<p id='descripcion'>$texto</p>";
            echo "</div>";

        }else{

        }

        echo "<button type='button'>";
        echo "<a href='index.php?seccion=reservas'>Reservar</a>";
        echo "</button>";

        echo "</div>";

    } 
}

// <!-- FUNCION PARA MOSTRAR EL CARROUSEL -->

function mostrarCarrousel($galeria){
    $i = 0;
    foreach ($galeria as $foto => $valor) {
        if ($i < 9) {
            echo "<section class='slider__section'>";
                echo "<img src='$valor[url]' class='slider__img'>";
            echo "</section>";
        }
        $i++;
    }
}

// <!-- FUNCION PARA SACAR ESPACIOS DE DATOS DEL FORMULARIO DE CONTACTO -->
 
function resultadoFormulario($datos) {
    $datos = trim($datos);
    return $datos;
}

// <!-- FUNCION PARA MOSTRAR DESTINOS -->

function MostrarDestinos(){
    $directorio = "images";
    $dir = opendir($directorio);
   
    echo "<div class='destinos-filas'>";
   
       while ($carpeta = readdir($dir)){
           
           if($carpeta != "." && $carpeta != ".."){
               
               $subDirectorio = "$directorio/$carpeta";
       
               $subDir = opendir($subDirectorio);
               

               $img = glob("$subDirectorio/*.jpg");


                   echo "<div class='destinos-inicio'>";

                           echo "<h2>$carpeta</h2>";

                           echo "<img src='$img[0]'>";

                   echo "</div>";

                   echo "<br>";
           }
       }
   
   echo "</div>";		
}

// <!-- FUNCION PARA MOSTRAR EL PANEL DE CONTROL DE DESTINOS -->

function mostrarPanelDeControlDestinos($galeria){

    foreach($galeria as $destino):
        
        ?>

        <tr>
            <td><?php echo $destino["id"]; ?></td>
            <td><?php echo $destino["nombre"]; ?></td>

            <td class="acciones">
                <form action="editarDestino.php" method="get" class="Eliminar">
                    <input type="hidden" value="<?php echo $destino["id"]; ?>" name="id">
                    <button type="submit" class="botonAcciones">
                        <i class="material-icons">mode_edit</i>
                    </button>
                </form>

                <form action="procesarEliminarDestino.php" method="post" class="Eliminar">
                    <input type="hidden" value="<?php echo $destino["id"]; ?>" name="id">
                    <button type="submit" class="botonAcciones">
                        <i class="material-icons">delete</i>
                    </button>
                </form>
            </td>
        </tr>

        <?php
    endforeach;

}

// <!-- FUNCION PARA MOSTRAR EL PANEL DE CONTROL DE USUARIOS -->

function mostrarPanelDeControlUsuarios($usuarios){

    foreach($usuarios as $usuario):
        
        ?>

        <tr>
            <td><?php echo $usuario["id"]; ?></td>
            <td><?php echo $usuario["nombre"] . " " . $usuario["apellido"]; ?></td>
            <td><?php echo $usuario["mail"]; ?></td>
            <td><?php echo $usuario["rol"]; ?></td>

            <td class="acciones">
                <form action="procesarEliminarUsuario.php" method="post" class="Eliminar">
                    <input type="hidden" value="<?php echo $usuario["id"]; ?>" name="id">
                    <button type="submit" class="botonAcciones">
                        <i class="material-icons">delete</i>
                    </button>
                </form>
            </td>
        </tr>

        <?php
    endforeach;

}

// <!-- FUNCION PARA MOSTRAR LA BOTONERA -->

function mostrarBotonera($categorias){
        
    ?>

    <ul>

    <?php

        foreach($categorias as $nombre => $url):

    ?>

    <li>
        <a href="<?php echo $url; ?>"><?php echo $nombre; ?></a>
    </li>

    <?php

        endforeach;

    ?>

    </ul>
    
    <?php
    
        if(empty($_SESSION["usuario"])){
    ?>
            
        <li>
            <a href="login.php" class="panel">
                Iniciar sesión
            </a>
        </li>

    <?php
        }else{

            $nombre = $_SESSION["usuario"]["nombre"]. " " .$_SESSION["usuario"]["apellido"];
            ?>
            <div class="dropdown">
            <button onclick="menuDesplegable()" class="dropbtn"><?php echo $nombre?></button>
            <div id="myDropdown" class="dropdown-content">

            <?php if ($_SESSION["usuario"]["rol"] == 1){
                    ?>
                    <a href="panelDeControlMenu.php">Panel de control</a>
                    <a href="perfilUsuario.php">Perfil</a>
                    <a href="logout.php">Cerrar sesión</a>
                    <?php
                }else{
                    ?>
                    <a href="perfilUsuario.php">Perfil</a>
                    <a href="logout.php">Cerrar sesión</a>
                    <?php
                };
            ?> 
            </div>
            </div>
            
            <?php
        };
        
}

// <!-- FUNCION PARA MOSTRAR LAS SECCIONES -->

function mostrarSecciones($galeria){
    if(!empty($_GET['seccion'])){    

        if($_GET['seccion'] === "inicio")

            require('secciones/inicio.php');

        elseif($_GET['seccion'] === "acercade")

            require('secciones/acercade.php');

        elseif($_GET['seccion'] === "destinos")

            require('secciones/destinos.php');

        elseif($_GET['seccion'] === "reservas")

            require('secciones/reservas.php');

        else{

            require('secciones/404.php');
        }

    }else{

        require('secciones/inicio.php');

    }
}
// <!-- FUNCION PARA BUSCAR EL ULTIMO ID -->

function ultimoId($galeria){
    usort($galeria, function ($a, $b) {
        return $b['id'] - $a['id'];
    });

    $primerRegistro = $galeria[0];

    $ultimoId = $primerRegistro["id"];

    return $ultimoId;
}

?>



