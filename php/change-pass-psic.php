<?php
// Función para cifrar la contraseña usando password_hash()
function encryptPassword($password) {
    return password_hash($password, PASSWORD_DEFAULT);
}

// Variable para almacenar el mensaje de éxito o error
$mensaje = '';

// Verificar si se envió el formulario para cambiar la contraseña
if (isset($_POST['password'])) {
    // Obtener el ID del psicólogo a partir del email del usuario que ha iniciado sesión
    $email_usuario = $_SESSION['email'];

    // Obtener la nueva contraseña desde el formulario (asegúrate de validar y sanear los datos del formulario)
    $new_pass = $_POST['password'];

    // Cifrar la nueva contraseña
    $pass_cifrada = encryptPassword($new_pass);

    // Actualizar la contraseña en la base de datos para el usuario con el email correspondiente
    $query = "UPDATE psicologos SET password = ? WHERE email = ?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("ss", $pass_cifrada, $email_usuario);
    $result = $stmt->execute();

    if ($result) {
        //$mensaje = 'Contraseña actualizada con éxito.';
        echo "<script>alert('Contraseña actualizada con éxito.'); window.location.href = 'index.php';</script>";
    } else {
        $mensaje = 'Error al actualizar la contraseña: ' . $stmt->error;
    }

    $stmt->close();
}

// Cerrar la conexión a la BD
$con->close();
?>