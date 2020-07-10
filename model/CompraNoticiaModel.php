<?php
include_once ('helper/Database.php');

class CompraNoticiaModel
{
    private $conexion;

    public function __construct()
    {
        $this->conexion= new Database();
    }

    public function obtenerCompra($id_noticia, $id_usuario){
        $compra= $this->conexion->query("SELECT id_compra FROM compraNoticia 
                                                WHERE id_noticia=$id_noticia AND id_usuario=$id_usuario");

        return $compra;
    }

}