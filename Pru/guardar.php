<?php
include 'conex.php';

$provincia = $_POST['provincia'];
$nueva = $_POST['nueva_localidad'];

$stmt = $conn->prepare(
    "INSERT INTO localidades (id_provincia, localidad) VALUES (?, ?)"
);
$stmt->bind_param("is", $provincia, $nueva);
$stmt->execute();

header("Location: index.php");