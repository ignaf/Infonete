<?php
include_once("view/partial/headerInterno.php");
session_start();

$rol=$_SESSION['rol'];
$id_usuario=$_SESSION['id_usuario'];
$id_noticia=$_GET['id'];
$page = isset($_GET[ "page" ]) ? $_GET[ "page" ] : "inicioInterno";

if($rol==1){
    include_once ("view/partial/subHeaderAdmin.php");
}elseif ($rol==2){
    include_once ("view/partial/subHeaderConten.php");
}

switch ($page){
    case "inicioInterno":
        include_once ("controller/InicioInternoController.php");
        $controller = new InicioInternoController();
        $controller->execute($rol);
        break;

    case "agregarNoticias":
        include_once("controller/AgregarController.php");
        $controller = new AgregarController();
        $controller->executeNoticias();
        break;

    case "validarPublicacion":
        include_once("controller/ValidarController.php");
        $controller = new ValidarController();
        $controller->execute();
        break;


    case "agregarPublicacion":
        include_once("controller/AgregarController.php");
        $controller = new AgregarController();
        $controller->executePublicaciones();
        break;

    case "abmContenidistas":
        include_once ("controller/AltaBajaContenidistasController.php");
        $controller= new AltaBajaContenidistasController();
        $controller->execute();
        break;

    case "noticia":
        include_once ("controller/NoticiaController.php");
        $controller= new NoticiaController();
        $controller->execute($id_noticia, $id_usuario, $rol);
        break;

    case "compraNoticia":
        include_once ("controller/CompraNoticiaController.php");
        $controller= new CompraNoticiaController();
        $controller->execute();
        break;


}

//include_once("view/partial/footer.php");

?>


