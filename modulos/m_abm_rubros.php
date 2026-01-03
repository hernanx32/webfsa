<?php
function abmUsuario($conn)
{
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


<form action="abm_usuario.php?scr=buscar">

<div class="card">
  <!-- Encabezado: título a la izquierda y botón a la derecha -->
  <div class="card-header d-flex  justify-content-between align-items-center">
    <h3 class="card-title mb-0 font-weight-bold">ABM Usuarios</h3>
	<a href="abm_usuario.php?scr=agregar" class="btn btn-primary ml-auto p-2">
      <i class="fas fa-user-plus"> Agregar Usuario</i>
    </a>
  </div>
</div>	

  <div class="card-body">
    <table id="tablaUsuarios" class="table table-bordered table-hover table-striped">
      <thead class="bg-primary text-white text-center">
        <tr>
          <th>ID</th>
          <th>Usuario</th>
          <th>Nombre</th>
          <th>Sucursal</th>
          <th>Acceso</th>
          <th>Acciones</th>
        </tr>
      </thead>
      
<?PHP  
$sql = "
SELECT 
usuario.id_usuario, usuario.usuario, usuario.nombre,
sucu.nomb_suc AS nomb_suc,
acc.nombre AS acc_nombre
  FROM usuario
JOIN sucursales AS sucu 
	ON usuario.id_sucursal = sucu.id_sucursal
JOIN acceso AS acc
  ON usuario.id_acceso = acc.id_acceso
    WHERE id_usuario != 1 AND id_usuario != 2 
	ORDER BY `usuario`.`nombre` ASC
";
      
$result = $conn->query($sql);      
      

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        
        echo "<tr><td>";
        echo $row['id_usuario'];
        echo "</td><td>";
        echo $row['usuario'];
        echo "</td><td>";
        echo $row['nombre'];
        echo "</td><td>";
        echo $row['nomb_suc'];
        echo "</td><td>";
        echo $row['acc_nombre'];
        echo "</td><td align='center'>";
        echo "<a class='btn btn-md btn-warning' href='abm_usuario.php?scr=modificar&id=".$row['id_usuario']."'><i class='fas fa-edit'></i></a> - 
			  <a class='btn btn-md btn-danger' href='abm_usuario.php?scr=eliminar&id=".$row['id_usuario']."' onclick='confirmarEnlace(event)'><i class='fas fa-trash-alt'></i></a> </td></tr>"; 
    
    }
} else {
	  echo "<tr><td colspan='6'>0 resultados</td></tr>";
}
echo "</tbody></table></form>";

} 