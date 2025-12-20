<?php
session_start();
$titulo='Sistema - Inicio';
$path='';

include('config/conex.php');
include('include/cabeza.php');
include('include/pie.php');


cabeza($titulo,$path);

if (isset($_GET['msj']))
{
    $mensaje="<strong><span style='color: red;'>¡El Usuario y Clave son Incorrectos!..</span></strong>";    
   
} else {
    $mensaje="<strong><span style='color: Green;'>Bienvenido..</span></strong>";  
}

if (!isset($_GET['scr'])){
    
    include("modulos/login/login.php");
    $focus='usuario';
}else{
    $scr=$_GET['scr'];

    if ($scr=="ingresar"){
        include("modulos/login/ingresar.php");
        $focus='usuario';   
    }
    if($scr=="olvidoclave"){
    include("modulos/login/olvidoclave.php");
    $focus='correo';
    }
}

echo "Estado de Conexión: ".$EstCon ;
pieindex($focus,$path);

?>