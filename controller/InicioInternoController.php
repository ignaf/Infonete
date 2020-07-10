<?php


class InicioInternoController
{

    public function __construct()
    {
        include_once "model/VerModel.php";
    }

    public function execute($rol, $id_usuario)
    {
        switch ($rol){
            case 1:
                $modelo= new VerModel();
                $noticias= $modelo->obtenerNoticias();
                $noti= $modelo->obtenerNoticiasPendientes($id_usuario, $rol);

                include_once("view/inicioInternoViewAdmin.php");
            break;
            case 2:
                $modelo= new VerModel();
                $noticias= $modelo->obtenerNoticias();
                $noti= $modelo->obtenerNoticiasPendientes($id_usuario, $rol);
                include_once("view/inicioInternoViewConten.php");
            break;
            case 3:
                $modelo= new VerModel();
                $noticias= $modelo->obtenerNoticias();
                include_once("view/inicioInternoViewSuscriptor.php");
            break;
        }

    }
}