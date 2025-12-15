<?PHP
function cabeza($titulopag, $path)
{
 
global $fecha_form;

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  	
	<title><?php echo $titulopag; ?></title>
	
	<link rel="stylesheet" href="<?PHP echo $path;?>comp/google.css">
  	<link rel="stylesheet" href="<?PHP echo $path;?>comp/plugins/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="<?PHP echo $path;?>comp/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?PHP echo $path;?>comp/dist/css/adminlte.min.css">	
    <link rel="stylesheet" href="<?PHP echo $path;?>comp/plugins/select2/css/select2.min.css">
	<link rel="stylesheet" href="comp/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
	<script src="<?PHP echo $path;?>js/formularios.js"></script>
    <script src="<?PHP echo $path;?>js/jquery-3.6.0.min.js"></script>
    <link href="../comp/plugins/bootstrap/js/bootstrap.bundle.min.js.css" rel="stylesheet" type="text/css" media="screen">
		
  </head>
	<!-- Preloader  -->
  <div class="preloader">
   <a href="principal.php"> 
	<img src="img/cargando.gif" alt="Cargando...." height="100" width="100">
	<img  src="img/cargando.png" alt="Cargando...." height="100" width="180"></a>
	
  </div> 
<?PHP 
date_default_timezone_set('America/Argentina/Buenos_Aires');

	
$fecha_form = date('Y-m-d');
}

