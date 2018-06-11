<?php

    if(file_exists("database/usuarios.json")){
        $usuariosJson = file_get_contents("database/usuarios.json");
        
        $usuarios = json_decode($usuariosJson,true);
        
    }else{
        $usuarios = [
        
            ["id" => 1, "nombre" => "admin","apellido" => "admin", "mail" => "admin@admin.com","contraseña" => password_hash("admin",PASSWORD_DEFAULT), "rol" => 1],

        ];
    }

    


    