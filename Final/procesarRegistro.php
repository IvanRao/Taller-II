<?php
require_once("database/usuarios.php");
require_once("funciones.php");

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$mail = $_POST["mail"];
$contraseña = password_hash($_POST["contraseña"],PASSWORD_DEFAULT);

if (!empty($_POST["rol"])){
    $rol = $_POST["rol"];
}else{
    $rol = 0;
}

$id = ultimoId($usuarios) + 1;

$usuario = ["id" => $id, "nombre" => $nombre, "apellido" => $apellido, "mail" => $mail, "contraseña" => $contraseña, "rol" => $rol];

$usuarios[] = $usuario;

$json = json_encode($usuarios);


if(file_put_contents("database/usuarios.json",$json)){
    if(!empty($_POST["rol"])){
        header("Location:panelDeControlUsuarios.php");
    }else{
        header("Location:login.php");
    }
}


