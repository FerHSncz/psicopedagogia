<?php
// Incluir el archivo de config.php externo
include '../config.php';

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$carrera = $_POST['carrera'];
$email = $_POST['email'];
$password = 12345678;

// Cifrar la contraseña
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Preparar la consulta SQL
$consulta = "INSERT INTO alumnos (nombre, telefono, carrera, email, password) VALUES ('$nombre', '$telefono', '$carrera', '$email', '$hashedPassword')";

// Ejecutar la consulta
if ($con->query($consulta) === TRUE) {
    //echo 'Alumno registrado correctamente.';
    // Alerta de script y regreso a index.html
    echo '<script>alert("Alumno registrado correctamente."); window.location.href = "dash_psic.php";</script>';
} else {
    //echo 'Error al registrar el Alumno: ' . $con->error;
    // Alerta de script y regreso a index.html
    echo '<script>alert("Error al registrar al Alumno: ' . $con->error . '"); window.location.href = "dash_psic.php";</script>';
}

// Cerrar la conexión
$con->close();
?>