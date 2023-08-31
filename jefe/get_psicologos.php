<?php
// Incluir el archivo de configuración
require_once '../config.php';

// Consulta SQL para obtener todos los datos de la tabla "psicologos"
$sql = "SELECT id, nombre, telefono, email FROM psicologos";
$result = $con->query($sql);

// Crear un array con los datos para DataTables
$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

// Devolver los datos como JSON
echo json_encode(array('data' => $data));
?>
