<?PHP
function pieindex($focus,$path)
{
?>
<script src='<?PHP echo $path;?>comp/js/jquery.js'></script>
<script src='<?PHP echo $path;?>comp/js/bootstrap.bundle.js'></script>
<script src='<?PHP echo $path;?>comp/js/jquery.dataTables.js'></script>
<script src='<?PHP echo $path;?>comp/js/dataTables.bootstrap4.js'></script>
<script src='<?PHP echo $path;?>comp/js/dataTables.responsive.js'></script>
<script src='<?PHP echo $path;?>comp/js/responsive.bootstrap4.js'></script>
<script src='<?PHP echo $path;?>comp/js/dataTables.buttons.js'></script>
<script src='<?PHP echo $path;?>comp/js/buttons.bootstrap4.js'></script>
<script src='<?PHP echo $path;?>comp/js/jszip.js'></script>
<script src='<?PHP echo $path;?>comp/js/pdfmake.js'></script>
<script src='<?PHP echo $path;?>comp/js/vfs_fonts.js'></script>
<script src='<?PHP echo $path;?>comp/js/buttons.html5.js'></script>
<script src='<?PHP echo $path;?>comp/js/buttons.print.js'></script>
<script src='<?PHP echo $path;?>comp/js/buttons.colVis.js'></script>
<script src='<?PHP echo $path;?>comp/js/adminlte.min.js'></script>
	
</body>
</html>
<?php }


function pieprincipal($focus,$path){
?>
<!-- jQuery -->    
<script src='<?PHP echo $path;?>comp/js/jquery.js'></script>
<script src='<?PHP echo $path;?>comp/js/bootstrap.bundle.js'></script>
<script src='<?PHP echo $path;?>comp/js/jquery.dataTables.js'></script>
<script src='<?PHP echo $path;?>comp/js/dataTables.bootstrap4.js'></script>
<script src='<?PHP echo $path;?>comp/js/dataTables.responsive.js'></script>
<script src='<?PHP echo $path;?>comp/js/responsive.bootstrap4.js'></script>
<script src='<?PHP echo $path;?>comp/js/dataTables.buttons.js'></script>
<script src='<?PHP echo $path;?>comp/js/buttons.bootstrap4.js'></script>
<script src='<?PHP echo $path;?>comp/js/jszip.js'></script>
<script src='<?PHP echo $path;?>comp/js/pdfmake.js'></script>
<script src='<?PHP echo $path;?>comp/js/vfs_fonts.js'></script>
<script src='<?PHP echo $path;?>comp/js/buttons.html5.js'></script>
<script src='<?PHP echo $path;?>comp/js/buttons.print.js'></script>
<script src='<?PHP echo $path;?>comp/js/buttons.colVis.js'></script>
<script src='<?PHP echo $path;?>comp/js/adminlte.min.js'></script>
<script>

//SCRREM BAJAR CON ENTER
document.addEventListener('keypress', function(evt) {
  // Si el evento NO es una tecla Enter
  if (evt.key !== 'Enter') {
    return;
  }
  let element = evt.target;
  // Si el evento NO fue lanzado por un elemento con class "focusNext"
  if (!element.classList.contains('focusNext')) {
    return;
  }
  // AQUI logica para encontrar el siguiente
  let tabIndex = element.tabIndex + 1;
  var next = document.querySelector('[tabindex="'+tabIndex+'"]');
  // Si encontramos un elemento
  if (next) {
    next.focus();
    event.preventDefault();
  }
});
	
	
// document.getElementById("<?php  //echo $focus;?>").focus();
	
//COLOCA EL PUNTERO EN EL CAMPO 

document.addEventListener("DOMContentLoaded", function () {
    <?php if (!empty($focus)) : ?>
        var campo = document.getElementById("<?PHP echo $focus; ?>");
        if (campo) {
            campo.focus();
        }
    <?php endif; ?>
});


/*
function bajarEnter (field, event) {
	var keyCode = event.keyCode ? event.keyCode : event.which ? event.which : event.charCode;
	if (keyCode == 13) {
		var i;
		for (i = 0; i < field.form.elements.length; i++)
			if (field == field.form.elements[i])
				break;
		i = (i + 1) % field.form.elements.length;
		field.form.elements[i].value=''; 
		field.form.elements[i].focus();
		return false;
		} 
		else
	return true;
	}*/
</script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
	
</script>

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Junco SAS.
        </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2023-<?PHP echo date('Y');?> <a href="https://stiformosa.ddns.net">Sistema de Gestion V2.0</a>.</strong> Todos los derechos reservados.
  </footer>
	
</body>
</html>
<?PHP	}