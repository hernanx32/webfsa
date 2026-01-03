<?php
session_start();
$fecha=date('Y-m-d');
$id_us=$_SESSION['id_usuario'];
$usuario=$_SESSION['usuario'];
$nro_cat=$_SESSION['id_acceso'];
$nom_completo=$_SESSION['nombre'];
$nombre_acceso=$_SESSION['nombre_acceso'];


$titulo='ABM Rubros';
$path='';

include($path."include/cabeza.php");
include($path."include/menu.php");
include($path."include/pie.php");
include($path."config/conex.php");

include($path."modulos/m_abm_rubros.php");

cabeza($titulo,$path);
menu($nro_cat, $nom_completo,$nombre_acceso,$path);




if (isset($_GET['scr'])){
	$scr=$_GET['scr'];
}else{
?>
<script>
        function confirmarEnlace(event) {
            // Mostrar mensaje de confirmación
            var confirmacion = confirm("¿Estás seguro que desea Eliminar?");
            if (!confirmacion) {
                // Si el usuario cancela, evitar que el enlace se abra
                event.preventDefault();
            }
        }
    </script>
<form action="abm_rubros.php?scr=buscar">
<div class="card">
  <!-- Encabezado: título a la izquierda y botón a la derecha -->
  <div class="card-header d-flex  justify-content-between align-items-center">
    <h3 class="card-title mb-0 font-weight-bold"><?PHP echo $titulo;?></h3>
	<a href="abm_rubros.php?scr=agregar" class="btn btn-primary ml-auto p-2">
      <i class="fa fa-file"> Agregar Rubro</i>
    </a>
  </div>
</div>	
    <table id="tablaUsuarios" class="table table-sm table-bordered table-hover table-striped mx-auto"  style="max-width: 800px;">
      <thead class="bg-primary text-white text-center">
        <tr>
          <th>ID</th>
          <th>Rurbo</th>
          <th>Editar</th>
          <th>Sub-Rubro</th>
          
        </tr>
      </thead>
      
<?PHP  
$sql = "
SELECT * FROM `rubro` ORDER BY `desc_rubro` ASC ";
      
$result = $conn->query($sql);      
      

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        
        echo "<tr><td>";
        echo $row['id_rubro'];
        echo "</td><td>";
        echo $row['desc_rubro'];
        echo "</td><td align='center'>";
        echo "<a class='btn btn-md btn-warning' href='abm_rubros.php?scr=modificar&id=".$row['id_rubro']."'><i class='fa fa-edit'></i></a>";
        echo "</td><td align='center'>";
        echo "<a class='btn btn-md btn-primary' href='abm_rubros.php?scr=eliminar&id=".$row['id_rubro']."' onclick='confirmarEnlace(event)'><i class='fa fa-plus-square'></i></a> </td></tr>"; 
        
 
    
    }
} else {
	  echo "<tr><td colspan='6'>No hay resultados</td></tr>";
}
echo "</tbody></table></form>";

}

//actualizado
$focus='buscar_us';
$conn->close();
pieprincipal($focus,$path);
?>