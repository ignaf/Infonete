<?php
include_once '../helper/Database.php';
$conexion = new Database();

if(!isset($_POST["usuario"]) || !isset($_POST["clave"])) {
    header("Location: ../index.php");
    exit();
}

$usuario= $_POST['usuario'];
$clave = $_POST['clave'];
$clave = md5($clave);

$sql = "SELECT * FROM usuario WHERE nombre='$usuario' AND contraseña='$clave';";
$resul = $conexion->query($sql);

$arrayusuario = $resul[0];
$rol= $arrayusuario['id_grupo'];
$id_usuario= $arrayusuario['id_usuario'];



if(sizeof($resul) > 0){
    session_start();
    $_SESSION["usuario"]= $usuario;
    $_SESSION["rol"]= $rol;
    $_SESSION["id_usuario"]= $id_usuario;

    header("location: ../indexInterno.php?page=inicioInterno");
}else{
   

    header("Location: ../index.php?page=iniciarSesionFallido");
    //echo "<p>login incorrecto</p>";
    //echo "<a href='../index.php?page=iniciarSesion'>Reintentar</a>";
}
