<?php
session_start();

require_once("database/usuarios.php");

$mail = $_POST["mail"];
$contraseña = $_POST["contraseña"];

foreach($usuarios as $ind => $usr){
    
    if($usr["usuario"] == $usuario){

        if(password_verify($contraseña,$usr["contraseña"])){
            
            $us = $usr;
            
        }
        
    }
    
}

if(empty($us)){
    $_SESSION["login"] = "error";
    header("Location:index.php?login=error");
    die();
}

$_SESSION["usuario"] = $us;

if($us["rol"] == 1){
    header("Location:panelDeControlUsuarios.php");
}else{
    header("Location:index.php");
}














