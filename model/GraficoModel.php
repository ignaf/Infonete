<?php
include_once ("helper/Database.php");

class GraficoModel
{
    private $conexion;

    public function __construct()
    {
        $this->conexion = new Database();
    }

    public function obtenerData(){
        $data= $this->conexion->query("select us.nombre, count(co.id_usuario) from compraNoticia as co
                                            join usuario as us where 
                                                co.id_usuario=us.id_usuario group by co.id_usuario ;");
        return $data;
    }

}