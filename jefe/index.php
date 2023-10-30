<?php
    session_start();
    include '../config.php'; 
    
    /*Este codigo manda al archivo index.html si se trata de ingresar al dashboard sin haber iniciado sesion*/
    if (!isset($_SESSION['email'])) {
    header("location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Jefe de Área | Dashboard</title>
        <!-- Estilos CSS locales -->
		<link href="../css/styles.css" rel="stylesheet" />
        <!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
        <!-- Fontawesome -->
		<script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="dash_jefe.php">Psicopedagogia</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Conectado como: <?php echo ($_SESSION['nombre']);?><i class="fas fa-user fa-fw"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="logout.php">Cerrar sesión</a></li>
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
                                    <a class="nav-link" href="honey-test3.php">Honey Alonso</a>
                                    <a class="nav-link" href="pnl_test2.php">Modelo PNL</a>
                                    <a class="nav-link" href="#">Riesgos Psicosociales</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-user-plus"></i></div>
                                Opciones
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse " id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="registro_psicologo.php">Registrar Psicólogo</a>
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
                        <h1 class="mt-4">Bienvenido</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Vista Jefe de Área</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-6 col-md-6 text-center">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Total de Psicólogos Registrados</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="ver_total_psicologos.php"></a>
                                        <!-- Tarjeta total de Psicologos-->
                                        <?php                                             
                                        // Consulta SQL para contar el número de psicologos en la tabla "psicologos"
                                        $sql = "SELECT COUNT(*) AS total_alumnos FROM psicologos";

                                        // Ejecutar la consulta
                                        $result = $con->query($sql);

                                        // Verificar si la consulta se ejecutó correctamente
                                        if ($result) {
                                            // Obtener el resultado como un array asociativo
                                            $row = $result->fetch_assoc();

                                            // Obtener el número de psicologos contados
                                            $total_alumnos = $row['total_alumnos'];

                                            // Mostrar el resultado                                    
                                            echo "<div class='small text-white'>El número total de psicólogos registrados es: " . $total_alumnos . "</div>";
                                            echo "<div class='small text-white'><i class='fas fa-angle-right'></i> Ver datos</div>";
                                        } else {
                                            echo "Error al ejecutar la consulta: " . $con->error;
                                        }                                        
                                        ?>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Tarjeta total de Alumnos -->
                            <div class="col-xl-6 col-md-6 text-center">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Total de Alumnos Registrados</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="ver_total_alumnos.php"></a>
                                        <!-- Tarjeta total de Alumnos-->
                                        <?php                                             
                                        // Consulta SQL para contar el número de alumnos en la tabla "alumnos"
                                        $sql = "SELECT COUNT(*) AS total_alumnos FROM alumnos";

                                        // Ejecutar la consulta
                                        $result = $con->query($sql);

                                        // Verificar si la consulta se ejecutó correctamente
                                        if ($result) {
                                            // Obtener el resultado como un array asociativo
                                            $row = $result->fetch_assoc();

                                            // Obtener el número de alumnos contados
                                            $total_alumnos = $row['total_alumnos'];

                                            // Mostrar el resultado                                    
                                            echo "<div class='small text-white'>El número total de alumnos registrados es: " . $total_alumnos . "</div>";
                                            echo "<div class='small text-white'><i class='fas fa-angle-right'></i> Ver datos</div>";
                                        } else {
                                            echo "Error al ejecutar la consulta: " . $con->error;
                                        }

                                        // Cerrar la conexión a la base de datos
                                        $con->close();
                                        ?>

                                    </div>
                                </div>
                            </div>

                            <!-- Tarjeta Amarilla -->
                            <div class="col-xl-6 col-md-6 text-center">
                                <div class="card bg-warning mb-4">
                                    <div class="card-body">Canal de Aprendizaje de Preferencia Lynn O’Brien (1990)</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="ver_alumnos_test1.php"></a>
                                        <div class="small"><i class="fas fa-angle-right"></i>Resultados</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tarjeta aqua -->
                            <div class="col-xl-6 col-md-6">
                                <div class="card bg-info text-white mb-4">
                                    <div class="card-body">Modelo PNL</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="ver_test2.php">Resultados</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tarjeta Roja -->
                            <div class="col-xl-6 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Cuestionario HONEY-ALONSO</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="ver_test3.php">Resultados</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Riesgos Psicosociales</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="ver_test4.php">Resultados</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tarjeta gris -->
                        </div>
                        
                        <!-- Linea separador -->
                        <div class="card mb-4">
                        </div>
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
    </body>
</html>