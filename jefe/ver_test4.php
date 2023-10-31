<?php include '../config.php';
    session_start();

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
        <title>Jefe de Área | Ver Resultados Individuales</title>
        <!-- Estilos CSS locales -->
		<link href="../css/styles.css" rel="stylesheet" />
        <!-- bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
        <!-- Fontawesome -->
		<script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- chart.js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.0/chart.min.js" integrity="sha512-7U4rRB8aGAHGVad3u2jiC7GA5/1YhQcQjxKeaVms/bT66i3LVBMRcBI9KwABNWnxOSwulkuSXxZLGuyfvo7V1A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">Psicopedagogia</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Conectado como: <?php echo ($_SESSION['nombre']);?><i class="fas fa-user fa-fw"></i>
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
                                    <a class="nav-link" href="honey-test3.php">Honey Alonso</a>
                                    <a class="nav-link" href="pnl_test2.php">Modelo PNL</a>
                                    <a class="nav-link" href="test4.php">Riegos Psicosociales</a>
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
                        <h1 class="mt-4">Resultados del:</h1>
                        <h3 class="mt-4">Canal de Aprendizaje Cuestionario Riesgos Psicosociales</h3>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Vista Jefe de Área</li>
                        </ol>
                        <div class="row">
                        <div class="container">
                        <!-- Tabla y procesos -->
                        <table class="table table-striped text-center">
                            <div class="font-monospace">La siguiente tabla muestra información solamente de los alumnos que han realizado el <strong>Test de Canal de Aprendizaje Cuestionario Riesgos Psicosociales</strong></div>
                            <br>
                                <thead class="thead-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre completo</th>
                                        <th>Aprendizaje</th>
                                        <th>Psicoemocional</th>
                                        <th>AdaptacionSocial</th>
                                        <th>Proyecto de vida</th>
                                        <th>Detalles</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    // Conexión utilizando las variables del archivo config_db.php
                                    require_once('../config.php');
                                    $con = new mysqli($hostname, $username, $password, $dbname);
                                    // Verificar si la conexión fue exitosa
                                    if ($con->connect_error) {
                                        die("Error de conexión a la base de datos: " . $con->connect_error);
                                    }
                                    // Realizar la consulta SQL
                                    $sql = "SELECT * FROM riesgospsicosociales";
                                    $result = $con->query($sql);
                                    // Restablecer el puntero del resultado de la consulta al principio
                                    mysqli_data_seek($result, 0);
                                    // Realizar el while por cada categoria segun los valores a sumar
                                    while ($mostrar = mysqli_fetch_array($result)) {
                                        $AprendizajeSum = $mostrar['p1'] + $mostrar['p5'] + $mostrar['p9'] + $mostrar['p13'] + $mostrar['p17'];
                                        $PsicoemocionalSum = $mostrar['p2'] + $mostrar['p6'] + $mostrar['p10'] + $mostrar['p14'] + $mostrar['p18'];
                                        $SocialSum = $mostrar['p3'] + $mostrar['p7'] + $mostrar['p11'] + $mostrar['p15'] + $mostrar['p19'];
                                        $ProyectoSum = $mostrar['p4'] + $mostrar['p8'] + $mostrar['p12'] + $mostrar['p16'] + $mostrar['p20'];
                                        ?>
                                    <!-- Impresion del while de cada categoria -->
                                    <tr>
                                        <td><?php echo $mostrar['id'] ?></td>
                                        <td><?php echo $mostrar['nombre'] ?></td>
                                        <td><?php echo $AprendizajeSum; ?></td>
                                        <td><?php echo $PsicoemocionalSum; ?></td>
                                        <td><?php echo $SocialSum; ?></td>
                                        <td><?php echo $ProyectoSum; ?></td>
                                        <td>
                                            <!-- Pasar esos datos al modal por id segun la tabla de resultados NO la de SQL -->
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#recordModal<?php echo $mostrar['id']; ?>">
                                                <i class="fas fa-chart-pie"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <!-- Modal por cada fila $row de la tabla de resultados -->
                                    <div class="modal fade" id="recordModal<?php echo $mostrar['id']; ?>" tabindex="-1" aria-labelledby="recordModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalTitle<?php echo $mostrar['id']; ?>">Registro de detalles para el ID: <?php echo $mostrar['id']; ?></h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body" id="modalContent<?php echo $mostrar['id']; ?>">
                                                    <p><strong>ID: </strong><?php echo $mostrar['id']; ?></p>
                                                    <p><strong>Nombre: </strong><?php echo $mostrar['nombre']; ?></p>
                                                    <p><strong>Aprendizaje: </strong><?php echo $AprendizajeSum; ?></p>
                                                    <p><strong>Psicoemocional: </strong><?php echo $PsicoemocionalSum; ?></p>
                                                    <p><strong>Social: </strong><?php echo $SocialSum; ?></p>
                                                    <p><strong>Proyecto: </strong><?php echo $ProyectoSum; ?></p>
                                                    <!-- cdn chart js -->
                                                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> 
                                                    <!-- canvas de la grafica -->
                                                    <canvas id="chart1" style="display: block;box-sizing: border-box;height: 50px;width: 50px;background: white;"></canvas>
                                                    <!-- script de la grafica -->
                                                    <script>
                                                        var ctx = document.getElementById("chart1");
                                                        var data = {
                                                            labels: ["Aprendizaje", "Psicoemocional", "Social", "Proyecto"],
                                                            datasets: [{
                                                                label: 'Perfil de Aprendizaje',
                                                                data:[
                                                                    <?php echo $AprendizajeSum; ?>,
                                                                    <?php echo $PsicoemocionalSum; ?>,
                                                                    <?php echo $SocialSum; ?>,
                                                                    <?php echo $ProyectoSum; ?>
                                                                ],
                                                                backgroundColor: [ "#000000"],
                                                                borderColor: "#000000",
                                                                pointBackgroundColor: [
                                                                    "#05AD3C", // Color del primer punto (ACTIVO)
                                                                    "#D70000", // Color del segundo punto (REFLEXIVO)
                                                                    "#FFFF00", // Color del tercer punto (TEORICO)
                                                                    "#00B8DF" // Color del cuarto punto (PRAGMATICO)
                                                                ],
                                                                borderWidth: 1,
                                                                fill: false
                                                            },]
                                                        };
                                                        var options = {
                                                            maintainAspectRatio: true,
                                                            spanGaps: false,
                                                            scales: {
                                                                r: {
                                                                    beginAtZero: true,
                                                                    stepSize: 0.01
                                                                }
                                                            },
                                                            elements: {
                                                                line: {
                                                                    tension: 0.01
                                                                }
                                                            },
                                                        };
                                                        var chart1 = new Chart(ctx, {
                                                            type: 'radar',
                                                            data: data,
                                                            options: options
                                                        });
                                                    </script>
                                                    <script>
                                                        function goBack() {
                                                            window.history.back();
                                                        }
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                
                                    <?php 
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- API de Google Charts  -->
                        <script src="https://www.gstatic.com/charts/loader.js"></script>
                    </div>
                    <!-- Linea separador -->
                    <div class="card mb-4"></div>
                    <!-- Fin Linea separador -->
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
            </div> <!-- Fin del <div id="layoutSidenav_content"> -->
        </div> <!-- Fin del <div id="layoutSidenav"> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    </body>
</html>