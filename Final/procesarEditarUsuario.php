 <?php
    require_once("database/usuarios.php");
    session_start();

    $id = $_SESSION["usuario"]["id"];

    foreach($usuarios as $indice => $usuario){

        if($usuario["id"] == $id){
            $ind = $indice;
            $usuarioEditar = $usuario;	
        }
    }

    if(!isset($usuarioEditar)){
        header("Location:index.php");
        die();
    }

    if (!empty($_POST["nombre"])) {
        $nombre = $_POST["nombre"];
    }else{
        if (empty($_POST["nombre"])) {
            header("Location:perfilUsuario.php?resultado=error");
            die();
        }
    }

    if (!empty($_POST["apellido"])) {
        $apellido = $_POST["apellido"];
    }else{
        if (empty($_POST["apellido"])) {
            header("Location:perfilUsuario.php?resultado=error");
            die();
        }
    }

    if (!empty($_POST["mail"])) {
        $mail = $_POST["mail"];
    }else{
        if (empty($_POST["mail"])) {
            header("Location:perfilUsuario.php?resultado=error");
            die();
        }
    }

    if (!empty($_POST["contraseña"])) {
        $contraseña = password_hash($_POST["contraseña"],PASSWORD_DEFAULT);
    }else{
        $contraseña = $_SESSION["usuario"]["contraseña"];
    }

    $usuarios[$ind]["nombre"] = $nombre;
    $usuarios[$ind]["apellido"] = $apellido;
    $usuarios[$ind]["mail"] = $mail;
    $usuarios[$ind]["contraseña"] = $contraseña;
    $usuarios[$ind]["rol"] = $_SESSION["usuario"]["rol"];

    $_SESSION["usuario"] = $usuarios[$ind];

    $json = json_encode($usuarios);

    file_put_contents("database/usuarios.json",$json);

    header("Location:perfilUsuario.php?resultado=exitoMod");

?>



