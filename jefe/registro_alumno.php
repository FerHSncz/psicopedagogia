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
        <title>Jefe de Área | Registrar Alumno</title>
        <!-- Estilos CSS locales -->
		<link href="css/styles.css" rel="stylesheet" />
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
                                    <a class="nav-link" href="test-lyn.html">Linn O´Brien</a>
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
                        <h1 class="mt-4">Registrar Alumno</h1>
                        <br>
                        <form method="POST" action="registro_alumnopsic.php" >
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="nombre" class="form-label">Nombre completo:</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escriba el nombre completo" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="telefono" class="form-label">Teléfono:</label>
                                        <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Escriba el número de celular o casa"  required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="carrera" class="form-label">Carrera:</label>
                                        <select class="form-select" id="carrera" name="carrera" required>
                                            <option value="" selected disabled>Seleccionar una carrera...</option>
                                            <option value="Ing. en Procesos Alimentarios">Ing. en Procesos Alimentarios</option>
                                            <option value="Ing. en Mantenimiento Industrial">Ing. en Mantenimiento Industrial</option>
                                            <option value="Ing. en Desarrollo y Gestión de Software">Ing. en Desarrollo y Gestión de Software</option>
                                            <option value="Ing. en Energías Renovables">Ing. en Energías Renovables</option>
                                            <option value="Lic. en Gestión del Capital Humano">Lic. en Gestión del Capital Humano</option>
                                            <option value="Ing. en Metal Mecánica">Ing. en Metal Mecánica</option>
                                            <option value="Ing. en Logística Internacional">Ing. en Logística Internacional</option>
                                            <option value="Lic. en Gestión y Desarrollo Turístico">Lic. en Gestión y Desarrollo Turístico</option>
                                            <option value="Lic. en Gastronomía">Lic. en Gastronomía</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Correo electrónico:</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Escriba el email institucional o personal" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Contraseña: <small><strong>(Automática por sistema)</strong></small></label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="12345678" readonly>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Guardar</button>
                        </form>
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