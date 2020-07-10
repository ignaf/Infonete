<?php

class NoticiaController{

    public function __construct()
    {
        include_once ("model/NoticiaModel.php");
        include_once ("model/CompraNoticiaModel.php");
    }

    public function execute($id_noticia, $id_usuario, $rol){
        $modelo= new NoticiaModel();
        $modelcompra= new CompraNoticiaModel();

        $compra=$modelcompra->obtenerCompra($id_noticia, $id_usuario);

        if($rol!=3){
            $noticia=$modelo->mostrarNoticia($id_noticia);
            include_once ("view/NoticiaView.php");
        }elseif ($rol==3){
            if(sizeof($compra)>0){
                $noticia=$modelo->mostrarNoticia($id_noticia);
                include_once ("view/NoticiaView.php");
            }else{
                $id_noticia=$id_noticia;
                include_once ("view/CompraNoticiaView.php");
            }
        }






    }

}