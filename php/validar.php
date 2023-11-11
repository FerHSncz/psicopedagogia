<?php
// Incluir el archivo de config.php externo
include 'config.php';
session_start();

// Obtener los datos del formulario
$email = $_POST['email'];
$password = $_POST['password'];
// Mensaje para solicitar que el usuario ingrese su correo dos veces
echo '<script>alert("Las credenciales ingresadas no coinciden con ningún perfil de usuario. Por favor, verifique su correo electrónico e intente nuevamente");</script>';

// Consultas SQL para verificar las credenciales del usuario en las tres tablas
$consultaAlumnos = "SELECT * FROM alumnos WHERE email = '$email'";
$consultaJefes = "SELECT * FROM jefearea WHERE email = '$email'";
$consultaPsic = "SELECT * FROM psicologos WHERE email = '$email'";

// Ejecutar las consultas
$resultadoAlumnos = $con->query($consultaAlumnos);
$resultadoJefes = $con->query($consultaJefes);
$resultadoPsic = $con->query($consultaPsic);

if ($resultadoAlumnos->num_rows == 1) {
    $fila = $resultadoAlumnos->fetch_assoc();
    $hashedPassword = $fila['password'];

    // Verificar la contraseña ingresada
    if (password_verify($password, $hashedPassword)) {
        // Inicio de sesión exitoso
        $_SESSION['email'] = $email;
        $_SESSION['nombre'] = $fila['nombre']; // Almacenar el nombre del usuario en la sesión
        header("Location: ../alumnos/index.php");
        exit();
    } else {
        // Contraseña incorrecta
        echo '<script>alert("Intente de nuevo."); window.location.href = "index.php";</script>';
    }
} elseif ($resultadoJefes->num_rows == 1) {
    $fila = $resultadoJefes->fetch_assoc();
    $hashedPassword = $fila['password'];

    // Verificar la contraseña ingresada
    if (password_verify($password, $hashedPassword)) {
        // Inicio de sesión exitoso
        $_SESSION['email'] = $email;
        $_SESSION['nombre'] = $fila['nombre']; // Almacenar el nombre del usuario en la sesión
        header("Location: ../jefe/index.php");
        exit();
    } else {
        // Contraseña incorrecta
        echo '<script>alert("Intente de nuevo."); window.location.href = "index.php";</script>';
    }
} elseif ($resultadoPsic->num_rows == 1) {
    $fila = $resultadoPsic->fetch_assoc();
    $hashedPassword = $fila['password'];

    // Verificar la contraseña ingresada
    if (password_verify($password, $hashedPassword)) {
        // Inicio de sesión exitoso
        $_SESSION['email'] = $email;
        $_SESSION['nombre'] = $fila['nombre']; // Almacenar el nombre del usuario en la sesión
        header("Location: ../psic/index.php");
    } else {
        // Contraseña incorrecta
        echo '<script>alert("Intente de nuevo."); window.location.href = "index.php";</script>';
    }
} else {
    // Usuario no encontrado en ninguna tabla
echo '<script>alert("Usuario no encontrado o contraseña incorrecta."); window.location.href = "index.php";</script>';
}

// Cerrar la conexión
$con->close();

?>