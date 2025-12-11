<?php session_start();	?>
<!doctype html>
<html lang="es">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<title>Sistema de Gestion</title>
	

  	
	<link rel="stylesheet" href="comp/all.min.css">
	<link rel="stylesheet" href="comp/google.css">	
	<link rel="stylesheet" href="comp/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="comp/adminlte.min.css">	
	
	
    

</head>


<?PHP
if (isset($_GET['msj']))
{
    $mensaje="<strong><span style='color: red;'>¡El Usuario y Clave son Incorrectos!..</span></strong>";    
   
} else {
    $mensaje="<strong><span style='color: Green;'>Bienvenido..</span></strong>";  
}	
	
	
if (!isset($_GET['scr']))
{
  
 ?>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a class="h1"><b>Sistema de</b> Gestión</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg"><?php echo $mensaje; ?></p>

      <form id="form1" name="form1"  action="index.php?scr=ingresar" method="post">
        <div class="input-group mb-3">
          <input name="usuario" type="text" required="required" class="form-control" id="usuario" placeholder="Usuario" onkeypress="return bajarEnter(this, event)" size="20" maxlength="20">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input name="clave" type="password" required="required" class="form-control" id="clave" placeholder="Contraseña" size="20" maxlength="20">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
  <div class="row">
          <!-- /.col -->
    <div class="col-5">
   	<!-- <a href="index.php?scr=olvidoclave">¿Olvido Su Clave?</a> -->
   	</div>         
    <div class="col-7">
    <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
    </div>

          <!-- /.col -->
  </div>
      </form>
 
   
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
	
	
		
<?PHP }
	else{
		
//$conn= new mysqli("localhost", "root", "LauLukLulu477!", "grftools");
$conn= new mysqli("localhost", "webfsaco_usr-hr", "M1EqZf_yN9q]8bRf", "webfsaco_grftools");

$conn->set_charset("utf8");


if($conn->connect_error){
	die('Error de Conexion '.$conn->connect_error);
	$EstCon = 'Error';
}else{
	$EstCon = 'OK';
	
}
	
	$scr=$_GET['scr'];

    if ($scr=="ingresar"){
    $usuario=$_POST["usuario"];
	$clave=$_POST["clave"];    
    $clave=md5($clave);
      	 

			$sql=$conn->query("SELECT u.id_usuario,	u.usuario, u.nombre, u.id_acceso, a.nombre AS nombre_acceso	
								FROM usuario u
								INNER JOIN acceso a ON u.id_acceso = a.id_acceso
								WHERE  usuario='$usuario' AND clave='$clave' ");
			if ($sql->num_rows > 0) {
    			while($row = $sql->fetch_assoc()) {
					$_SESSION['id_usuario'] = $row["id_usuario"];
					$_SESSION['usuario'] = $row["usuario"];
					$_SESSION['id_acceso'] = $row["id_acceso"];
					$_SESSION['nombre_acceso'] = $row["nombre_acceso"];
					$_SESSION['nombre'] = $row["nombre"];
					
					echo $row["id_usuario"];
					echo $row["usuario"];
					echo $row["id_acceso"];
					echo $row["nombre_acceso"];
					echo $row["nombre"];
				
				}
    			/* liberar el conjunto de resultados */
    			$sql->close();
            $conn->close();
			echo 'Usuario Logueado Correctamente Ingresando.....';
						
			echo "<meta http-equiv='refresh' content='2; url=https://www.webfsa.com.ar/grftools/principal.php'>";
				
			exit();
			}else{
			$mensaje='Error al Logearse';
			echo "<meta http-equiv='refresh' content='0; url=https://www.webfsa.com.ar/grftools/index.php?msj=error'>";
          
			}
			$mensaje='<p style="color:red;">Datos Incorrectos!</p>';
	    ?>      

        <a href="index.php">Cancelar</a>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
        
<?PHP
	}
    }
	
	?>
		
</body>
</html>