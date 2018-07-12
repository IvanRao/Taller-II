 <?php
    require_once("database/galeria.php");

    if(empty($_POST["id"])){
        header("Location:panelDeControl.php");
        die();
    }

    $id = $_POST["id"];
    $imagenActual = $_POST["imagenActual"];

    foreach($galeria as $indice => $destino){

        if($destino["id"] == $id){
            $ind = $indice;
            $destinoEditar = $destino;	
        }
    }

    $nombreViejo = $galeria[$ind]["nombre"];
    $path = getcwd();
    $path = $path . "/" . "images";

    if(!isset($destinoEditar)){
        header("Location:panelDeControl.php");
        die();
    }

    if (!empty($_POST["nombre"])) {
        $nombre = $_POST["nombre"];
    }else{
        if (empty($_POST["nombre"])) {
            header("Location:paneldecontrol.php?resultado=error");
            die();
        }
    }

    if (!empty($_POST["descripcion"])) {
        $descripcion = $_POST["descripcion"];
    }else{
        if (empty($_POST["descripcion"])) {
            header("Location:paneldecontrol.php?resultado=error");
            die();
        }
    }

	if($_FILES["imagen"]["size"] > 0){
		$imagen = "images/" . $nombre . "/" . time().".jpg";
		
		move_uploaded_file($_FILES["imagen"]["tmp_name"],$imagen);
		
		//con esto borramos la imagen vieja.
		unlink(ltrim($imagenActual));
		
	}else{
        $arrayImagen = explode("/", $imagenActual);
        $arrayImagen[1] = $nombre;
        $imagen = implode("/",$arrayImagen);
	}

    rename("$path/$nombreViejo/", "$path/$nombre/" );

    $descripcionDestino = "images/$nombre/descripcion.txt";

    file_put_contents($descripcionDestino, $descripcion);

    $galeria[$ind]["nombre"] = $nombre;
    $galeria[$ind]["descripcion"] = $descripcionDestino;
    $galeria[$ind]["url"] = $imagen;

    $json = json_encode($galeria);

    file_put_contents("database/galeria.json",$json);

    header("Location:panelDeControl.php");

?>



