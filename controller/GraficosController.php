<?php


class GraficosController
{

    public function __construct()
    {
        include_once "model/GraficoModel.php";
    }

    public function execute($rol){

        if($rol==1){
            $modelo = new GraficoModel();
            $data = $modelo -> obtenerData();
            include_once ("view/grafico.php");
        }else{
            header("Location: ../indexInterno.php?page=inicioInterno");
        }

    }

}