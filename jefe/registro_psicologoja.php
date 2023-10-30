<?php
// Incluir el archivo de config.php externo
include '../config.php';

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$password = 12345678;

// Cifrar la contraseña
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Preparar la consulta SQL
$consulta = "INSERT INTO psicologos (nombre, telefono, email, password) VALUES ('$nombre', '$telefono', '$email', '$hashedPassword')";

// Ejecutar la consulta
if ($con->query($consulta) === TRUE) {
    //echo 'Psicologo registrado correctamente.';
    // Alerta de script y regreso a index.html
    echo '<script>alert("Psicologo registrado correctamente."); window.location.href = "index.php";</script>';
} else {
    //echo 'Error al registrar el Psicologo: ' . $con->error;
    // Alerta de script y regreso a index.html
    echo '<script>alert("Error al registrar al Psicologo: ' . $con->error . '"); window.location.href = "index.php";</script>';
}

// Cerrar la conexión
$con->close();
?>