<?php
// Incluir el archivo de config.php externo
include '../config.php';

// Obtener los datos del formulario
$email = $_POST['email'];
$password = $_POST['password'];

// Consulta SQL para verificar las credenciales del usuario
$consulta = "SELECT * FROM psicologos WHERE email = '$email'";

// Ejecutar la consulta
$resultado = $con->query($consulta);

if ($resultado->num_rows == 1) {
    $fila = $resultado->fetch_assoc();
    $hashedPassword = $fila['password'];

    // Verificar la contraseña ingresada
    if (password_verify($password, $hashedPassword)) {
        // Inicio de sesión exitoso
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['nombre'] = $fila['nombre']; // Almacenar el nombre del usuario en la sesión
        header("Location: dash_psic.php");
        exit();
    } else {
        // Contraseña incorrecta
        //echo 'Contraseña incorrecta.';
        // Alerta de script y regreso a index.html
        echo '<script>alert("Contraseña incorrecta."); window.location.href = "index.php";</script>';
    }
} else {
    // Usuario no encontrado
    //echo 'Usuario no encontrado.';
    // Alerta de script y regreso a index.html
    echo '<script>alert("Usuario no encontrado."); window.location.href = "index.php";</script>';
}

// Cerrar la conexión
$con->close();
?>
