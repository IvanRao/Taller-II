<?php
//login.php
session_start();

require_once("database/usuarios.php");

$usuario = $_POST["usuario"];
$password = $_POST["password"];


foreach($usuarios as $ind => $usr){
    
    if($usr["usuario"] == $usuario){

        if(password_verify($password,$usr["password"])){
            
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

if($us["rol"] === 1){
    header("Location:panelDeControl.php");
}else{
    header("Location:index.php");
    
}














