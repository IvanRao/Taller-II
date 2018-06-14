 <?php
    require_once("database/galeria.php");

    if(empty($_POST["id"])){
        header("Location:panelDeControl.php");
        die();
    }

    $id = $_POST["id"];

    foreach($galeria as $indice => $destino){

        if($destino["id"] == $id){
            $ind = $indice;
            $destinoEditar = $destino;	
        }
    }

    $nombreViejo = $galeria[$ind]["nombre"];

    if(!isset($destinoEditar)){
        header("Location:panelDeControl.php");
        die();
    }

    if (!empty($_POST["nombre"])) {
        $nombre = $_POST["nombre"];
    }else{
        if (empty($_POST["nombre"])) {
            header("Location:editarDestino.php?resultado=error");
            die();
        }
    }

    if (!empty($_POST["descripcion"])) {
        $descripcion = $_POST["descripcion"];
    }else{
        if (empty($_POST["descripcion"])) {
            header("Location:editarDestino.php?id=$ind?resultado=error");
            die();
        }
    }

    if($_FILES["imagen"]["size"] > 0){
        $imagen = "img/".time().".jpg";

        move_uploaded_file($_FILES["imagen"]["tmp_name"],$imagen);

        unlink($destinoEditar["imagen"]);
    }else{
        $imagen = $destinoEditar["imagen"];
    }

    $descripcionDestino = "images/$nombreViejo/descripcion.txt";

    file_put_contents("images/$nombreViejo/descripcion.txt", $descripcion);

    $galeria[$ind]["nombre"] = $nombre;
    $galeria[$ind]["descripcion"] = $descripcionDestino;
    $galeria[$ind]["imagen"] = $imagen;

    $json = json_encode($galeria);

    file_put_contents("database/galeria.json",$json);

    header("Location:panelDeControl.php");

?>



