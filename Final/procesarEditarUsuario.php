 <?php
    require_once("database/galeria.php");

    if(empty($_POST["id"])){
        header("Location:panelDeControlUsuarios.php");
        die();
    }

    $id = $_POST["id"];

    foreach($usuarios as $indice => $usuario){

        if($usuario["id"] == $id){
            $ind = $indice;
            $usuarioEditar = $usuario;	
        }
    }

    if(!isset($usuarioEditar)){
        header("Location:panelDeControlUsuarios.php");
        die();
    }

    if (!empty($_POST["nombre"])) {
        $nombre = $_POST["nombre"];
    }else{
        if (empty($_POST["nombre"])) {
            header("Location:panelDeControlUsuarios.php?resultado=error");
            die();
        }
    }

    if (!empty($_POST["nombre"])) {
        $nombre = $_POST["nombre"];
    }else{
        if (empty($_POST["nombre"])) {
            header("Location:panelDeControlUsuarios.php?resultado=error");
            die();
        }
    }

    if (!empty($_POST["apellido"])) {
        $apellido = $_POST["apellido"];
    }else{
        if (empty($_POST["apellido"])) {
            header("Location:panelDeControlUsuarios.php?resultado=error");
            die();
        }
    }

    if (!empty($_POST["mail"])) {
        $mail = $_POST["mail"];
    }else{
        if (empty($_POST["mail"])) {
            header("Location:panelDeControlUsuarios.php?resultado=error");
            die();
        }
    }

    if (!empty($_POST["rol"])) {
        $rol = $_POST["rol"];
    }else{
        if (empty($_POST["rol"])) {
            header("Location:panelDeControlUsuarios.php?resultado=error");
            die();
        }
    }

    $usuarios[$ind]["nombre"] = $nombre;
    $usuarios[$ind]["apellido"] = $apellido;
    $usuarios[$ind]["mail"] = $mail;
    $usuarios[$ind]["rol"] = $rol;


    $json = json_encode($usuarios);

    file_put_contents("database/galeria.json",$json);

    header("Location:panelDeControlUsuarios.php");

?>



