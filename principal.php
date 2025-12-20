<?php
session_start();

$id_us=$_SESSION['id_usuario'];
$usuario=$_SESSION['usuario'];
$nro_cat=$_SESSION['id_acceso'];
$nom_completo=$_SESSION['nombre'];


$titulo='Sistema - Principal';
$path='';
$focus='';


include($path."include/cabeza.php");
include($path."include/menu.php");
include($path."include/pie.php");
include($path."config/conex.php");


cabeza($titulo,$path);
menu($nro_cat, $nom_completo);
echo $nro_cat;	

echo "Pag. Principal en Construcción.";


pieprincipal($focus,$path);

?>
