<?php
session_start();
$titulo='Sistema - Principal';
$path='';
$focus='';

include($path."../include/cabeza.php");
include($path."../include/menu.php");
include($path."../include/pie.php");
include($path."conex.php");


?>
<body>
<h3>ABM SubRubros</h3>
	
<select id="provincia">
    <option value="">Seleccione Provincia</option>
    <?php
    include 'config/conex.php';
    $q = $conn->query("SELECT id, provincia FROM provincias ORDER BY provincia");
    while ($row = $q->fetch_assoc()) {
        echo "<option value='{$row['id']}'>{$row['provincia']}</option>";
    }
    ?>
</select>

<select id="localidad">
    <option value="">Seleccione Localidad</option>
</select>
	
	
<script>
document.getElementById("provincia").addEventListener("change", function () {

    let idProvincia = this.value;
    let localidad = document.getElementById("localidad");

    localidad.innerHTML = '<option>Cargando...</option>';

    if (idProvincia !== "") {
        fetch("get_localidades.php?id=" + idProvincia)
            .then(res => res.json())
            .then(data => {
                localidad.innerHTML = '<option value="">Seleccione Localidad</option>';
                data.forEach(item => {
                    localidad.innerHTML += `<option value="${item.id_localidad}">
                        ${item.localidad}
                    </option>`;
                });
            });
    } else {
        localidad.innerHTML = '<option value="">Seleccione Localidad</option>';
    }
});
</script>
	
	
</body>
</html>