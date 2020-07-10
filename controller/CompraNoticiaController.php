<?php
class CompraNoticiaController
{
    public function __construct()
    {
        include_once("model/CompraNoticiaModel.php");
    }

    public function execute(){
        include_once ("view/compraNoticiaView.php");
    }
}
