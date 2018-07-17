<?php
    
    $categorias = [];

    $categorias["Inicio"] = "index.php?seccion=inicio";
    $categorias["Acerca De"] = "index.php?seccion=acercade";
    $categorias["Destinos"] = "index.php?seccion=destinos";
    $categorias["Reservas"] = "index.php?seccion=reservas";


   if(file_exists("database/galeria.json")){
        $json = file_get_contents("database/galeria.json");
		
		$galeria = json_decode($json,true);
		
	}else{

        $galeria = [];

        $galeria["foto1"] ["id"] ="1";
        $galeria["foto1"] ["url"] =  "images/Bariloche/bariloche.jpg";
        $galeria["foto1"] ["nombre"] =  "Bariloche";
        $galeria["foto1"] ["descripcion"] =  "images/Bariloche/descripcion.txt";

        $galeria["foto2"] ["id"] ="2";
        $galeria["foto2"] ["url"] =  "images/Buenos Aires/caba.jpg";
        $galeria["foto2"] ["nombre"] =  "Buenos Aires";
        $galeria["foto2"] ["descripcion"] =  "images/Buenos Aires/descripcion.txt";

        $galeria["foto3"] ["id"] ="3";
        $galeria["foto3"] ["url"] =  "images/Catamarca/catamarca.jpg";
        $galeria["foto3"] ["nombre"] =  "Catamarca";
        $galeria["foto3"] ["descripcion"] =  "images/Catamarca/descripcion.txt";

        $galeria["foto4"] ["id"] ="4";
        $galeria["foto4"] ["url"] =  "images/Cordoba/cordoba.jpg";
        $galeria["foto4"] ["nombre"] =  "Cordoba";
        $galeria["foto4"] ["descripcion"] =  "images/Cordoba/descripcion.txt";

        $galeria["foto5"] ["id"] ="5";
        $galeria["foto5"] ["url"] =  "images/La Rioja/larioja.jpg";
        $galeria["foto5"] ["nombre"] =  "La Rioja";
        $galeria["foto5"] ["descripcion"] =  "images/La Rioja/descripcion.txt";

        $galeria["foto6"] ["id"] ="6";
        $galeria["foto6"] ["url"] =  "images/Las Grutas/lasgrutas.jpg";
        $galeria["foto6"] ["nombre"] =  "Las Grutas";
        $galeria["foto6"] ["descripcion"] =  "images/Las Grutas/descripcion.txt";

        $galeria["foto7"] ["id"] ="7";
        $galeria["foto7"] ["url"] =  "images/Mar Del Plata/mardelplata.jpg";
        $galeria["foto7"] ["nombre"] =  "Mar Del PLata";
        $galeria["foto7"] ["descripcion"] =  "images/Mar Del Plata/descripcion.txt";

        $galeria["foto8"] ["id"] ="8";
        $galeria["foto8"] ["url"] =  "images/Mendoza/mendoza.jpg";
        $galeria["foto8"] ["nombre"] =  "Mendoza";
        $galeria["foto8"] ["descripcion"] =  "images/Mendoza/descripcion.txt";

        $galeria["foto9"] ["id"] ="9";
        $galeria["foto9"] ["url"] =  "images/Misiones/misiones.jpg";
        $galeria["foto9"] ["nombre"] =  "Misiones";
        $galeria["foto9"] ["descripcion"] =  "images/Misiones/descripcion.txt";

        $galeria["foto10"] ["id"] ="10";
        $galeria["foto10"] ["url"] =  "images/Salta/salta.jpg";
        $galeria["foto10"] ["nombre"] =  "Salta";
        $galeria["foto10"] ["descripcion"] =  "images/Salta/descripcion.txt";
       
   }
?>