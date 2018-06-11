<?php

  require_once("database/galeria.php");
  require_once("funciones.php");

  $nombre = $imagen = $descripcion =  "";

  if (!empty($_POST["nombre"])) {
    $nombre = $_POST["nombre"];
  }else{
    if (empty($_POST["nombre"])) {
      header("Location:nuevoDestino.php?resultado=error");
      die();
    }
  }
  
  $imagen = $_FILES["imagen"];
  if ($imagen['size']==0) {
    header("Location:nuevoDestino.php?resultado=error");
    die();
  }

  if (!empty($_POST["descripcion"])) {
    $descripcion = $_POST["descripcion"];
  }else{
    if (empty($_POST["descripcion"])) {
      header("Location:nuevoDestino.php?resultado=error");
      die();
    }
  }


  if(!is_dir("images/$nombre")){
    mkdir("images/$nombre");	  
  }

  if($imagen["type"] != "image/jpeg"){
    header("Location:panelDeControlDeControl.php");
    die();
  }

  $nombreDestino = "images/$nombre/".time().".jpg";

  $descripcionDestino = "images/$nombre/descripcion.txt";

  move_uploaded_file($imagen["tmp_name"], $nombreDestino);

  file_put_contents("images/$nombre/descripcion.txt", $descripcion);

  $id = ultimoId($galeria) + 1;

  $galeria["foto".$id] = ["id" => $id, "url" => $nombreDestino, "nombre" => $nombre, "descripcion" => $descripcionDestino];

  $arrayJson = json_encode($galeria);

  file_put_contents("database/galeria.json",$arrayJson);

  header("Location:panelDeControl.php");

