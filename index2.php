<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
	<link rel='stylesheet' href='comp/google.css'>
  	<link rel='stylesheet' href='comp/plugins/fontawesome-free/css/all.min.css'>
	<link rel='stylesheet' href='comp/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'>
    <link rel='stylesheet' href='comp/adminlte.min.css'>	
    <link rel='stylesheet' href='comp/plugins/select2/css/select2.min.css'>
	<link rel='stylesheet' href='comp/plugins/datatables-buttons/css/buttons.bootstrap4.min.css'>
	<script src='comp/js/formularios.js'></script>
    <script src='comp/js/jquery-3.6.0.min.js'></script>
    <link href='comp/plugins/bootstrap/js/bootstrap.bundle.min.js.css' rel='stylesheet' type='text/css' media='screen'>
		
	
	
</head>

<body>
	
	
	<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a class="h1"><b>Sistema de</b> Gestión</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg"><?php echo 'Bienvenidos'; ?></p>

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
    <a href="index.php?scr=olvidoclave">¿Olvido Su Clave?</a>
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

</body>
</html>