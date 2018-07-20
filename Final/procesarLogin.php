<?php
session_start();

require_once("database/usuarios.php");

$mail = $_POST["mail"];
$contraseña = $_POST["contraseña"];

foreach($usuarios as $ind => $usr){
    
    if($usr["mail"] == $mail){

        if(password_verify($contraseña,$usr["contraseña"])){
            
            $us = $usr;
            
        }
        
    }
    
}

if(empty($us)){
    $_SESSION["login"] = "error";
    header("Location:login.php?resultado=error");
    die();
}

$_SESSION["usuario"] = $us;

if($us["rol"] == 1){
    header("Location:panelDeControlMenu.php?resultado=exito");
}else{
    header("Location:index.php?resultado=exito");
}