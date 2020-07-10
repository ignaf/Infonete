<?php
include_once ('helper/Database.php');

class VerModel
{
    private $conexion;

    public function __construct()
    {
        $this->conexion= new Database();
    }

    public function obtenerNoticias(){
        $noticias= $this->conexion->query("SELECT * FROM noticia WHERE estado=1");
        return $noticias;
    }

    public function obtenerNoticiasPendientes($id_usuario, $rol){
        if($rol==1){
            $noti=$this->conexion->query("SELECT * FROM noticia WHERE estado=0");
            return $noti;
        }elseif ($rol==2){
            $noti=$this->conexion->query("SELECT * FROM noticia WHERE estado=0 AND id_autor=$id_usuario");
            return $noti;
        }
    }

    public function obtenerDiarios(){
        $diarios= $this->conexion->query("SELECT * FROM diario WHERE estado=1");
        return $diarios;
    }

}