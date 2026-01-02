<?php
include 'conex.php';

$id = $_GET['id'];

$sql = "SELECT id_localidad, localidad 
FROM `localidades` 
WHERE id_provincia = ?
order BY localidad";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$res = $stmt->get_result();

$data = [];
while ($row = $res->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode($data);