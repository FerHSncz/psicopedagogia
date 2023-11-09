<?php
    //Este codigo manda al archivo index.html si se trata de ingresar al dashboard sin haber iniciado sesion
    session_start();
    if (!isset($_SESSION['email'])) {
        header("location: ../index.php");
        exit();
    }
?>