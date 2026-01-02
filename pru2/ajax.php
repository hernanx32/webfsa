<?php
include 'config.php'; //Bases de Datos

$accion = $_GET['accion'] ?? '';

/* ===============================
   CARGAR LOCALIDADES
================================ */
if ($accion === 'localidades') {

    $id = intval($_GET['id']);

    $sql = "SELECT id_localidad, localidad
            FROM localidades
            WHERE id_provincia = ?
            ORDER BY localidad";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    $res = $stmt->get_result();
    $data = [];

    while ($row = $res->fetch_assoc()) {
        $data[] = $row;
    }

    echo json_encode($data);
    exit;
}

