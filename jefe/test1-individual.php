<?php 
    include '../php/config.php';
    include '../php/sesion.php';
    include 'recursos/header.php';
?>
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Resultados del:</h1>
                        <h3 class="mt-4">Canal de Aprendizaje de Preferencia Lynn O’Brien (1990)</h3>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Vista Jefe de Área</li>
                        </ol>
                        <div class="row">
                        <div class="container">
                        <!-- Tabla y procesos -->
                        <table class="table table-striped text-center">
                            <div class="font-monospace">La siguiente tabla muestra información solamente de los alumnos que han realizado el <strong>Test de Canal de Aprendizaje de Preferencia de Lynn O’Brien (1990).</strong></div><br>
                                <thead class="thead-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre completo</th>
                                        <th>Visual</th>
                                        <th>Auditivo</th>
                                        <th>Kinestésico</th>
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
                                    $sql = "SELECT * FROM test1";
                                    $result = $con->query($sql);
                                    // Restablecer el puntero del resultado de la consulta al principio
                                    mysqli_data_seek($result, 0);
                                    // Realizar el while por cada categoria segun los valores a sumar
                                    while ($mostrar = mysqli_fetch_array($result)) {
                                        $visualSum = $mostrar['p1'] + $mostrar['p5'] + $mostrar['p9'] + $mostrar['p10'] + $mostrar['p11'] +
                                            $mostrar['p16'] + $mostrar['p17'] + $mostrar['p22'] + $mostrar['p26'] + $mostrar['p27'] +
                                            $mostrar['p32'] + $mostrar['p36'];
                                        $auditivoSum = $mostrar['p2'] + $mostrar['p3'] + $mostrar['p12'] + $mostrar['p13'] + $mostrar['p15'] +
                                            $mostrar['p19'] + $mostrar['p20'] + $mostrar['p23'] + $mostrar['p24'] + $mostrar['p28'] +
                                            $mostrar['p29'] + $mostrar['p33'];
                                        $kinestesicoSum = $mostrar['p4'] + $mostrar['p6'] + $mostrar['p7'] + $mostrar['p8'] + $mostrar['p14'] +
                                            $mostrar['p18'] + $mostrar['p21'] + $mostrar['p25'] + $mostrar['p30'] + $mostrar['p31'] +
                                            $mostrar['p34'] + $mostrar['p35'];
                                    ?>
                                        <!-- Impresion del while de cada categoria -->
                                        <tr>
                                            <td><?php echo $mostrar['id'] ?></td>
                                            <td><?php echo $mostrar['nombre'] ?></td>
                                            <td><?php echo $visualSum; ?></td>
                                            <td><?php echo $auditivoSum; ?></td>
                                            <td><?php echo $kinestesicoSum; ?></td>
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
                                                        <p><strong>Visual: </strong><?php echo $visualSum; ?></p>
                                                        <p><strong>Auditivo: </strong><?php echo $auditivoSum; ?></p>
                                                        <p><strong>Kinestésico: </strong><?php echo $kinestesicoSum; ?></p>
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
                            $visualSum = $mostrar['p1'] + $mostrar['p5'] + $mostrar['p9'] + $mostrar['p10'] + $mostrar['p11'] +
                                $mostrar['p16'] + $mostrar['p17'] + $mostrar['p22'] + $mostrar['p26'] + $mostrar['p27'] +
                                $mostrar['p32'] + $mostrar['p36'];
                            $auditivoSum = $mostrar['p2'] + $mostrar['p3'] + $mostrar['p12'] + $mostrar['p13'] + $mostrar['p15'] +
                                $mostrar['p19'] + $mostrar['p20'] + $mostrar['p23'] + $mostrar['p24'] + $mostrar['p28'] +
                                $mostrar['p29'] + $mostrar['p33'];
                            $kinestesicoSum = $mostrar['p4'] + $mostrar['p6'] + $mostrar['p7'] + $mostrar['p8'] + $mostrar['p14'] +
                                $mostrar['p18'] + $mostrar['p21'] + $mostrar['p25'] + $mostrar['p30'] + $mostrar['p31'] +
                                $mostrar['p34'] + $mostrar['p35'];
                              // Crear un array para los datos del gráfico
                            $chartData = array(
                                array('Tipo', 'Cantidad'),
                                array('Visual', $visualSum),
                                array('Auditivo', $auditivoSum),
                                array('Kinestesico', $kinestesicoSum)
                            );
                            // Convertir el array de PHP en un array de JavaScript usando json_encode
                            $chartDataJson = json_encode($chartData);
                            ?>
                            var data<?php echo $mostrar['id']; ?> = google.visualization.arrayToDataTable(<?php echo $chartDataJson; ?>);
                            var options<?php echo $mostrar['id']; ?> = {
                                title: 'Tipo de Aprendizaje',
                                is3D: true,
                            };
                            var chart<?php echo $mostrar['id']; ?> = new google.visualization.PieChart(document.getElementById('chart_div<?php echo $mostrar['id']; ?>'));
                            chart<?php echo $mostrar['id']; ?>.draw(data<?php echo $mostrar['id']; ?>, options<?php echo $mostrar['id']; ?>);
                            
                            <?php
                            }
                            ?>
                        }
                        </script>
                </main>
<?php 
    include 'recursos/footer.php';
?>