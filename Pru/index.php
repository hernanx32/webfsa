<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Provincias y Localidades</title>
<?PHP 

	include("conex.php");
	?>
<link rel="stylesheet"
 href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>


	
</head>

<body>

<h2>Alta de Localidad</h2>

<form action="guardar.php" method="post">
    <select name="provincia" id="provincia" required>
        <option value="">Seleccione Provincia</option>
        <?php

        $q = $conn->query("SELECT * FROM provincias ORDER BY provincia");
        while ($r = $q->fetch_assoc()) {
            echo "<option value='{$r['id_prov']}'>{$r['provincia']}</option>";
        }
        ?>
    </select>

    <select name="localidad" id="localidad" required>
        <option value="">Seleccione Localidad</option>
    </select>

    <input type="text" name="nueva_localidad" placeholder="Nueva localidad" required>
    <button type="submit">Guardar</button>
</form>

<hr>



<script>
$(document).ready(function(){

    $('#tabla').DataTable();

    $('#provincia').change(function(){
        let id = $(this).val();
        $('#localidad').html('<option>Cargando...</option>');

        if(id !== ''){
            $.getJSON('get_localidades.php?id='+id, function(data){
                $('#localidad').html('<option value="">Seleccione Localidad</option>');
                $.each(data, function(i, item){
                    $('#localidad').append(
                        `<option value="${item.id_localidad}">
                            ${item.localidad}
                        </option>`
                    );
                });
            });
        } else {
            $('#localidad').html('<option value="">Seleccione Localidad</option>');
        }
    });

});
</script>

</body>
</html>