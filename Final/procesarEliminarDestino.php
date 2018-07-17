<?php
	require_once("database/galeria.php");
	
	if(empty($_POST["id"])){
		header("Location:panelDeControlDestinos.php");
		die();
	}
	
	$id = $_POST["id"];
    
	foreach($galeria as $indice => $destino){
		
		if($destino["id"] == $id){
			$ind = $indice;	
		}
	}
	
	if(!isset($ind)){
		header("Location:panelDeControlDestinos.php");
		die();
	}

	$directorio = "images/".$galeria[$ind]["nombre"];
    $archivos = opendir($directorio);

    while ($archivo = readdir($archivos)){
        
        if($archivo != "." && $archivo != ".."){
            unlink("$directorio/$archivo");
        }
     }    
    
    rmdir("images/".$galeria[$ind]["nombre"]);
    unset($galeria[$ind]);
    
	$json = json_encode($galeria);
	
	file_put_contents("database/galeria.json",$json);
	
	header("Location:panelDeControlDestinos.php");
	
	