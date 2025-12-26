<?php
session_start();
session_destroy();
?>

<p id="mensaje" style="font-size:38px;color:#555;">
    Cerrando sesión, por favor espere...
</p>


<script>
    // tiempo en milisegundos (3000 = 3 segundos)
    setTimeout(function () {
        window.location.href = "../../index.php";
    }, 1000);
</script>


<?php
exit();
?>