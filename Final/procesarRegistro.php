<?php
//registrarse
session_start();
require_once("database/usuarios.php");
require_once("funcion.php");

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$mail = $_POST["mail"];
$contraseña = $_POST["contraseña"];

$id = ultimoId($usuarios) + 1;
$password = password_hash($contraseña,PASSWORD_DEFAULT);

$usuario = ["id" => $id, "nombre" => $nombre, "apellido" => $apellido, "mail" => $mail, "contraseña" => $pass, "rol" => 0];

$usuarios[] = $usuario;

$json = json_encode($usuarios);


if(file_put_contents("database/usuarios.json",$json)){
    $_SESSION["usuario"] = $usuario;
    $_SESSION["registro"] = "ok";
    header("Location:index.php");
    
}else{
    $_SESSION["registro"] = "error";
    header("Location:index.php");
}


