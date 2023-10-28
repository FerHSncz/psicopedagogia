<?php
    session_start();
    include '../config.php'; 
    
    /*Este codigo manda al archivo index.html si se trata de ingresar al dashboard sin haber iniciado sesion*/
    if (!isset($_SESSION['email'])) {
    header("location: index.php");
    exit();
}

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
        echo "<script>alert('Contraseña actualizada con éxito.'); window.location.href = 'dash_psic.php';</script>";
    } else {
        $mensaje = 'Error al actualizar la contraseña: ' . $stmt->error;
    }

    $stmt->close();
}

// Cerrar la conexión a la BD
$con->close();
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Psicologo | Cambiar contraseña</title>
        <!-- Estilos CSS locales -->
		<link href="css/styles.css" rel="stylesheet" />
        <!-- Fontawesome -->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="dash_psic.php">Psicopedagogia</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Conectado como: 
                        <?php echo ($_SESSION['nombre']); //Muestro el nombre de quien inicio sesion?><i class="fas fa-user fa-fw"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="logout.php">Cerrar sesion</a></li>
                        <li><hr class="dropdown-divider"/></li>
                        <li><a class="dropdown-item" href="cambiar_pass.php">Cambiar contraseña</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Dashboard</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-chart-simple"></i></div>
                                Gráficas globales
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse show" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="ver_alumnos_test1global.php">Linn O´Brien</a>
                                    <a class="nav-link" href="honey-alonso1.html">Honey Alonso</a>
                                    <a class="nav-link" href="PNL.html">Modelo PNL</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-user-plus"></i></div>
                                Opciones
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse " id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="registro_alumno.php">Registrar Alumno</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Cambiar contraseña de la cuenta</h1>
                        <br>
                        <form method="POST" action="cambiar_pass.php" >
                            <div class="row">                    
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Nueva Contraseña:</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Escriba su nueva contraseña" required>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Actualizar</button>
                        </form>
                            <!-- Script para mostrar la alerta -->
                            <script>
                                var mensaje = '<?php echo $mensaje; ?>';
                                if (mensaje !== '') {
                                    alert(mensaje);
                                }
                            </script>
                    </div>                                
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Psicopedagogia web</div>
                            <div>
                                <a href="#">Politicas de privacidad</a>
                                &middot;
                                <a href="#">Terminos &amp; Condiciones</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>