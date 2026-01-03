<?php
session_start();
$fecha=date('Y-m-d');


$titulo='ABM Rubros';
$path='';

include($path."include/cabeza.php");
include($path."include/menu.php");
include($path."include/pie.php");
include($path."config/conex.php");

include($path."modulos/m_abm_rubros.php");

cabeza($titulo,$path);
?>
</head>

<body>
<!--	
<div class="container">
  <div class="row justify-content-center">
    <div class="col-auto">-->

  <div class="card-body">
    <table id="tablaUsuarios" class="table table-bordered table-hover table-striped w-auto mx-auto">
      <thead class="bg-primary text-white text-center">
          <thead class="bg-primary text-white text-center">
            <tr>
              <th>ID</th>
              <th>Rubro</th>
              <th>Editar</th>
              <th>Sub-Rubro</th>
            </tr>
          </thead>
          <tr>
            <td>1</td>
            <td>Varios</td>
            <td class="text-center">
              <a class="btn btn-sm btn-warning" href="#">
                <i class="fa fa-edit"></i>
              </a>
            </td>
            <td class="text-center">
              <a class="btn btn-sm btn-primary" href="#">
                <i class="fa fa-plus-square"></i>
              </a>
            </td>
          </tr>
			          <tr>
            <td>2</td>
            <td>Repuestos</td>
            <td class="text-center">
              <a class="btn btn-sm btn-warning" href="#">
                <i class="fa fa-edit"></i>
              </a>
            </td>
            <td class="text-center">
              <a class="btn btn-sm btn-primary" href="#">
                <i class="fa fa-plus-square"></i>
              </a>
            </td>
          </tr>
			
        </table>
      </form>

    </div>
  </div>
</div>
	
</body>
</html>