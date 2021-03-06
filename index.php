<?php
include_once("view/partial/header.php");

$page = isset($_GET[ "page" ]) ? $_GET[ "page" ] : "inicio";

switch ($page){
    case "inicio":
        include_once ("controller/InicioController.php");
        $controller = new InicioController();
        $controller->execute();
        break;

    case "registrarse":
        include_once("controller/RegistrarseController.php");
        $controller = new RegistrarseController();
        $controller->execute();
        break;

    case "usuarioExistente":
        include_once("controller/UsuarioExistenteController.php");
        $controller = new UsuarioExistenteController();
        $controller->execute();
        break;

    case "registroFallido":
        include_once("controller/RegistroFallidoController.php");
        $controller = new RegistroFallidoController();
        $controller->execute();
        break;

    case "iniciarSesion":
        include_once("controller/IniciarSesionController.php");
        $controller = new IniciarSesionController();
        $controller->execute();
        break;

    case "iniciarSesionFallido":
        include_once("controller/IniciarSesionFallidoController.php");
        $controller = new IniciarSesionFallidoController();
        $controller->execute();
        break;

    case "contacto":
    default:
        include_once("controller/ContactoController.php");
        $controller = new ContactoController();
        $controller->execute();
        break;
}

include_once("view/partial/footer.php");

?>

