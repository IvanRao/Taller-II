<?php
	require_once("database/usuarios.php");
	
	if(empty($_POST["id"])){
		header("Location:panelDeControlUsuarios.php");
		die();
	}
	
	$id = $_POST["id"];
    
	foreach($usuarios as $indice => $usuario){
		
		if($usuario["id"] == $id){
			$ind = $indice;	
		}
	}
	
	if(!isset($ind)){
		header("Location:panelDeControlUsuarios.php");
		die();
	}

    unset($usuarios[$ind]);
    
	$json = json_encode($usuarios);
	
	file_put_contents("database/usuarios.json",$json);
	
	header("Location:panelDeControlUsuarios.php?resultado=exitoEliminar");
	
	