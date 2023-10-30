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
        <title>Jefe de Área | Ver Resultados Individuales</title>
        <!-- Estilos CSS locales -->
		<link href="css/styles.css" rel="stylesheet" />
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
                        <h3 class="mt-4">Canal de Aprendizaje Cuestionario Honey-Alonso</h3>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Vista Jefe de Área</li>
                        </ol>
                        <div class="row">
                        <div class="container">
                        <!-- Tabla y procesos -->
                        <table class="table table-striped text-center">
                            <div class="font-monospace">La siguiente tabla muestra información solamente de los alumnos que han realizado el <strong>Test de Canal de Aprendizaje Cuestionario Honey-Alonso</strong></div>
                            <br>
                                <thead class="thead-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre completo</th>
                                        <th>Activo</th>
                                        <th>Reflexivo</th>
                                        <th>Teorico</th>
                                        <th>Pragmatico</th>
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
                                    $sql = "SELECT * FROM honey";
                                    $result = $con->query($sql);
                                    // Restablecer el puntero del resultado de la consulta al principio
                                    mysqli_data_seek($result, 0);
                                    // Realizar el while por cada categoria segun los valores a sumar
                                    while ($mostrar = mysqli_fetch_array($result)) {
                                        $activoSum = $mostrar['p3'] + $mostrar['p5'] + $mostrar['p7'] + $mostrar['p9'] + $mostrar['p13'] + $mostrar['p20'] + $mostrar['p26'] + $mostrar['p27'] + $mostrar['p35'] + $mostrar['p37'] + $mostrar['p41'] + $mostrar['p43'] + $mostrar['p46'] + $mostrar['p48'] + $mostrar['p51'] + $mostrar['p61'] + $mostrar['p67'] + $mostrar['p74'] + $mostrar['p75'] + $mostrar['p77'];
                                        $reflexivoSum = $mostrar['p10'] + $mostrar['p16'] + $mostrar['p18'] + $mostrar['p19'] + $mostrar['p28'] + $mostrar['p31'] + $mostrar['p32'] + $mostrar['p34'] + $mostrar['p36'] + $mostrar['p39'] + $mostrar['p42'] + $mostrar['p44'] + $mostrar['p49']+ $mostrar['p55'] + $mostrar['p58'] + $mostrar['p63'] + $mostrar['p65'] + $mostrar['p69'] + $mostrar['p70'] + $mostrar['p79'];
                                        $teoricoSum = $mostrar['p2'] + $mostrar['p4'] + $mostrar['p6'] + $mostrar['p11'] + $mostrar['p15'] + $mostrar['p17'] + $mostrar['p21'] + $mostrar['p23'] + $mostrar['p25'] + $mostrar['p29'] + $mostrar['p33'] + $mostrar['p45'] + $mostrar['p50'] + $mostrar['p54'] + $mostrar['p60'] + $mostrar['p64'] + $mostrar['p66'] + $mostrar['p71'] + $mostrar['p78'] + $mostrar['p80'];
                                        $pragmaticoSum = $mostrar['p1'] + $mostrar['p8'] + $mostrar['p12'] + $mostrar['p14'] + $mostrar['p22'] + $mostrar['p24'] + $mostrar['p30'] + $mostrar['p38'] + $mostrar['p40'] + $mostrar['p47'] + $mostrar['p52'] + $mostrar['p53'] + $mostrar['p56'] + $mostrar['p57'] + $mostrar['p59'] + $mostrar['p62'] + $mostrar['p68'] + $mostrar['p72'] + $mostrar['p73'] + $mostrar['p76'];
                                        ?>
                                        <!-- Impresion del while de cada categoria -->
                                    <tr>
                                        <td><?php echo $mostrar['id'] ?></td>
                                        <td><?php echo $mostrar['nombre'] ?></td>
                                        <td><?php echo $activoSum; ?></td>
                                        <td><?php echo $reflexivoSum; ?></td>
                                        <td><?php echo $teoricoSum; ?></td>
                                        <td><?php echo $pragmaticoSum; ?></td>
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
                                                    <p><strong>ACTIVO: </strong><?php echo $activoSum; ?></p>
                                                    <p><strong>REFLEXIVO: </strong><?php echo $reflexivoSum; ?></p>
                                                    <p><strong>TEORICO: </strong><?php echo $teoricoSum; ?></p>
                                                    <p><strong>PRAGMATICO: </strong><?php echo $pragmaticoSum; ?></p>
                                                    <!-- DIV para mostrar el grafico -->
                                                    <div id="chart_div<?php echo $mostrar['id']; ?>"></div>
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
                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                        <script src="https://www.gstatic.com/charts/loader.js"></script>
                        <script>
                        google.charts.load('current', {'packages':['corechart']});
                        google.charts.setOnLoadCallback(drawCharts);
                        function drawCharts() {
                            <?php
                            // Restablecer el puntero del resultado de la consulta al principio
                            mysqli_data_seek($result, 0);
                            while ($mostrar = mysqli_fetch_array($result)) {
                                // Extraer datos para la fila actual
                                $activoSum = $mostrar['p3'] + $mostrar['p5'] + $mostrar['p7'] + $mostrar['p9'] + $mostrar['p13'] + $mostrar['p20'] + $mostrar['p26'] + $mostrar['p27'] + $mostrar['p35'] + $mostrar['p37'] + $mostrar['p41'] + $mostrar['p43'] + $mostrar['p46'] + $mostrar['p48'] + $mostrar['p51'] + $mostrar['p61'] + $mostrar['p67'] + $mostrar['p74'] + $mostrar['p75'] + $mostrar['p77'];
                                $reflexivoSum = $mostrar['p10'] + $mostrar['p16'] + $mostrar['p18'] + $mostrar['p19'] + $mostrar['p28'] + $mostrar['p31'] + $mostrar['p32'] + $mostrar['p34'] + $mostrar['p36'] + $mostrar['p39'] + $mostrar['p42'] + $mostrar['p44'] + $mostrar['p49']+ $mostrar['p55'] + $mostrar['p58'] + $mostrar['p63'] + $mostrar['p65'] + $mostrar['p69'] + $mostrar['p70'] + $mostrar['p79'];
                                $teoricoSum = $mostrar['p2'] + $mostrar['p4'] + $mostrar['p6'] + $mostrar['p11'] + $mostrar['p15'] + $mostrar['p17'] + $mostrar['p21'] + $mostrar['p23'] + $mostrar['p25'] + $mostrar['p29'] + $mostrar['p33'] + $mostrar['p45'] + $mostrar['p50'] + $mostrar['p54'] + $mostrar['p60'] + $mostrar['p64'] + $mostrar['p66'] + $mostrar['p71'] + $mostrar['p78'] + $mostrar['p80'];
                                $pragmaticoSum = $mostrar['p1'] + $mostrar['p8'] + $mostrar['p12'] + $mostrar['p14'] + $mostrar['p22'] + $mostrar['p24'] + $mostrar['p30'] + $mostrar['p38'] + $mostrar['p40'] + $mostrar['p47'] + $mostrar['p52'] + $mostrar['p53'] + $mostrar['p56'] + $mostrar['p57'] + $mostrar['p59'] + $mostrar['p62'] + $mostrar['p68'] + $mostrar['p72'] + $mostrar['p73'] + $mostrar['p76'];
                              // Crear un array para los datos del gráfico
                                $chartData = array(
                                    array('Tipo', 'Cantidad'),
                                    array('Activo', $activoSum),
                                    array('Reflexivo', $reflexivoSum),
                                    array('Teorico', $teoricoSum),
                                    array('Pragmatico', $pragmaticoSum)
                            );
                            // Convertir el array de PHP en un array de JavaScript usando json_encode
                            $chartDataJson = json_encode($chartData);
                            ?>
                            
                            var data<?php echo $mostrar['id']; ?> = google.visualization.arrayToDataTable(<?php echo $chartDataJson; ?>);
                            var options<?php echo $mostrar['id']; ?> = {
                                title: 'Tipo de Aprendizaje',
                                is3D: true,
                            };
                            var chart<?php echo $mostrar['id']; ?> = new google.visualization.LineChart(document.getElementById('chart_div<?php echo $mostrar['id']; ?>'));
                            chart<?php echo $mostrar['id']; ?>.draw(data<?php echo $mostrar['id']; ?>, options<?php echo $mostrar['id']; ?>);
                            
                        <?php
                            }
                        ?>
                        }
                        </script>  
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