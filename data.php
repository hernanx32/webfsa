<?php
include "../config/conexion.php";
$id = $_GET['id_rubro'] ?? 0;

$sql = "SELECT s.*, r.descripcion rubro
        FROM subrubro s
        JOIN rubro r ON r.id_rubro=s.id_rubro";

if($id>0) $sql.=" WHERE s.id_rubro=$id";

$res = $cn->query($sql);
$data=[];

while($r=$res->fetch_assoc()){
    $r['acciones'] =
      "<a href='editar.php?id={$r['id_subrubro']}'>✏️</a>
       <a href='eliminar.php?id={$r['id_subrubro']}'>🗑️</a>";
    $data[]=$r;
}

echo json_encode(["data"=>$data]);