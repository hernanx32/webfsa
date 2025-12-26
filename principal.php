<?php
session_start();

$id_us=$_SESSION['id_usuario'];
$usuario=$_SESSION['usuario'];
$nro_cat=$_SESSION['id_acceso'];
$nom_completo=$_SESSION['nombre'];
$nombre_acceso=$_SESSION['nombre_acceso'];

$titulo='Sistema - Principal';
$path='';
$focus='';


include($path."include/cabeza.php");
include($path."include/menu.php");
include($path."include/pie.php");
include($path."config/conex.php");


cabeza($titulo,$path);
menu($nro_cat, $nom_completo, $nombre_acceso);


echo "Pag. Principal en Construcción.";


pieprincipal($focus,$path);

?>
