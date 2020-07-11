<?php
include_once '../helper/Database.php';
session_start();
$conexion = new Database();

$id_usuario=$_SESSION['id_usuario'];
$id_noticia=$_GET['id_noticia'];
$numtarj=$_POST['numerotarjeta'];
$nombretarj=$_POST['nombretarjeta'];
$mes=$_POST['mes_venc'];
$ano=$_POST['ano_venc'];
$codigo=$_POST['codigo_seg'];


$sql = "INSERT INTO compraNoticia(id_usuario, id_noticia, numero_tarjeta, nombre_tarjeta, ano_vencimiento_tarjeta, mes_vencimiento_tarjeta, codigo_seguridad_tarjeta) 
                                    VALUES ('$id_usuario', '$id_noticia', '$numtarj', '$nombretarj', '$ano', '$mes', '$codigo');";

$sqlconsul = "SELECT id_compra FROM compraNoticia WHERE id_noticia='$id_noticia' AND id_usuario='$id_usuario';";


if($conexion->query($sqlconsul)){
    echo "error";
}else{
    $conexion->execute($sql);

    if($conexion->query($sqlconsul)){
        header("Location: ../indexInterno.php?page=inicioInterno");
    }else{
        echo "error2";
    }
    $conexion->close();
}