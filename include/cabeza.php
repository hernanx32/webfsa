<?PHP
function cabeza($titulopag, $path)
{
 
global $fecha_form;

?>
<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  	
	<title><?php echo $titulopag; ?></title>

	
	
	<link rel='stylesheet' href='<?PHP echo $path;?>comp/css/google.css'>
	<link rel='stylesheet' href='<?PHP echo $path;?>comp/css/adminlte.min.css'>
	<link rel='stylesheet' href='<?PHP echo $path;?>comp/css/fontawesome-free-all.min.css'>
	<link rel='stylesheet' href='<?PHP echo $path;?>comp/css/dataTables.bootstrap4.min.css'>
	<link rel='stylesheet' href='<?PHP echo $path;?>comp/css/select2.min.css'>
	<link rel='stylesheet' href='<?PHP echo $path;?>comp/css/buttons.bootstrap4.css'>
	<link rel='stylesheet' href='<?PHP echo $path;?>comp/css/bootstrap.bundle.min.js.css'>
	
	
	<script src='<?PHP echo $path;?>comp/js/adminlte.min.js'></script>
	<script src="<?PHP echo $path;?>comp/js/jquery-3.6.0.min.js"></script>
	<script src="<?PHP echo $path;?>comp/js/formularios.js"></script>
	

  </head>
	<!-- Preloader  
  <div class='preloader'>
   <a href='principal.php'> 
	<img src='img/cargando.gif' alt='Cargando....' height='100' width='100'>
	<img  src='img/cargando.png' alt='Cargando....' height='100' width='180'></a>
	
  </div> -->
<?PHP 
date_default_timezone_set('America/Argentina/Buenos_Aires');

	
$fecha_form = date('Y-m-d');
}

