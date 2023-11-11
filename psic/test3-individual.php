<?php
    include '../php/config.php';
    include '../php/sesion.php';
    include '../recursos/header.php';
?>
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Resultados del:</h1>
                        <h3 class="mt-4">Canal de Aprendizaje Modelo PNL</h3>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Vista Psicologo</li>
                        </ol>
                        <div class="row">
                        <div class="container">
                        <!-- Tabla y procesos -->
                        <table class="table table-striped text-center">
                            <div class="font-monospace">La siguiente tabla muestra información solamente de los alumnos que han realizado el <strong>Test de Canal de Aprendizaje Modelo PNL.</strong></div>
                            <br>
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
                                    $sql = "SELECT * FROM pnl";
                                    $result = $con->query($sql);

                                    // Restablecer el puntero del resultado de la consulta al principio
                                    mysqli_data_seek($result, 0);

                                    // Realizar el while por cada categoria segun los valores a sumar
while ($mostrar = mysqli_fetch_array($result)) {
    $visualSum = $mostrar['p1'] + $mostrar['p2'] + $mostrar['p3'] + $mostrar['p4'] + $mostrar['p5'] +
            $mostrar['p6'] + $mostrar['p7'] + $mostrar['p8'] + $mostrar['p9'] + $mostrar['p10'] +
            $mostrar['p11'] + $mostrar['p12'] + $mostrar['p13'] + $mostrar['p14'] + $mostrar['p15'] +
            $mostrar['p16'] + $mostrar['p17'] + $mostrar['p18'] + $mostrar['p19'] + $mostrar['p20'] +
            $mostrar['p21'] + $mostrar['p22'] + $mostrar['p23'] + $mostrar['p24'] + $mostrar['p25'] +
            $mostrar['p26'] + $mostrar['p27'] + $mostrar['p28'] + $mostrar['p29'] + $mostrar['p30'] +
            $mostrar['p31'] + $mostrar['p32'] + $mostrar['p33'] + $mostrar['p34'] + $mostrar['p35'] +
            $mostrar['p36'] + $mostrar['p37'] + $mostrar['p38'] + $mostrar['p39'] + $mostrar['p40'];

    $auditivoSum = $mostrar['p1'] + $mostrar['p2'] + $mostrar['p3'] + $mostrar['p4'] + $mostrar['p5'] +
            $mostrar['p6'] + $mostrar['p7'] + $mostrar['p8'] + $mostrar['p9'] + $mostrar['p10'] +
            $mostrar['p11'] + $mostrar['p12'] + $mostrar['p13'] + $mostrar['p14'] + $mostrar['p15'] +
            $mostrar['p16'] + $mostrar['p17'] + $mostrar['p18'] + $mostrar['p19'] + $mostrar['p20'] +
            $mostrar['p21'] + $mostrar['p22'] + $mostrar['p23'] + $mostrar['p24'] + $mostrar['p25'] +
            $mostrar['p26'] + $mostrar['p27'] + $mostrar['p28'] + $mostrar['p29'] + $mostrar['p30'] +
            $mostrar['p31'] + $mostrar['p32'] + $mostrar['p33'] + $mostrar['p34'] + $mostrar['p35'] +
            $mostrar['p36'] + $mostrar['p37'] + $mostrar['p38'] + $mostrar['p39'] + $mostrar['p40'];

    $kinestesicoSum = $mostrar['p1'] + $mostrar['p2'] + $mostrar['p3'] + $mostrar['p4'] + $mostrar['p5'] +
            $mostrar['p6'] + $mostrar['p7'] + $mostrar['p8'] + $mostrar['p9'] + $mostrar['p10'] +
            $mostrar['p11'] + $mostrar['p12'] + $mostrar['p13'] + $mostrar['p14'] + $mostrar['p15'] +
            $mostrar['p16'] + $mostrar['p17'] + $mostrar['p18'] + $mostrar['p19'] + $mostrar['p20'] +
            $mostrar['p21'] + $mostrar['p22'] + $mostrar['p23'] + $mostrar['p24'] + $mostrar['p25'] +
            $mostrar['p26'] + $mostrar['p27'] + $mostrar['p28'] + $mostrar['p29'] + $mostrar['p30'] +
            $mostrar['p31'] + $mostrar['p32'] + $mostrar['p33'] + $mostrar['p34'] + $mostrar['p35'] +
            $mostrar['p36'] + $mostrar['p37'] + $mostrar['p38'] + $mostrar['p39'] + $mostrar['p40'];
    
    // Contar cuántas veces se ha marcado cada columna
$visualCount = ($mostrar['p1'] == 2) + ($mostrar['p2'] == 1) + ($mostrar['p3'] == 2) + ($mostrar['p4'] == 3) +
            ($mostrar['p5'] == 3) + ($mostrar['p6'] == 2) + ($mostrar['p7'] == 1) + ($mostrar['p8'] == 2) +
            ($mostrar['p9'] == 1) + ($mostrar['p10'] == 3) + ($mostrar['p11'] == 2) + ($mostrar['p12'] == 2) +
            ($mostrar['p13'] == 3) + ($mostrar['p14'] == 1) + ($mostrar['p15'] == 2) + ($mostrar['p16'] == 1) +
            ($mostrar['p17'] == 3) + ($mostrar['p18'] == 3) + ($mostrar['p19'] == 1) + ($mostrar['p20'] == 1) +
            ($mostrar['p21'] == 2) + ($mostrar['p22'] == 3) + ($mostrar['p23'] == 1) + ($mostrar['p24'] == 2) +
            ($mostrar['p25'] == 1) + ($mostrar['p26'] == 3) + ($mostrar['p27'] == 2) + ($mostrar['p28'] == 3) +
            ($mostrar['p29'] == 2) + ($mostrar['p30'] == 3) + ($mostrar['p31'] == 2) + ($mostrar['p32'] == 3) +
            ($mostrar['p33'] == 1) + ($mostrar['p34'] == 2) + ($mostrar['p35'] == 2) + ($mostrar['p36'] == 1) +
            ($mostrar['p37'] == 1) + ($mostrar['p38'] == 2) + ($mostrar['p39'] == 2) + ($mostrar['p40'] == 3);

$auditivoCount = ($mostrar['p1'] == 1) + ($mostrar['p2'] == 3) + ($mostrar['p3'] == 1) + ($mostrar['p4'] == 2) +
                ($mostrar['p5'] == 2) + ($mostrar['p6'] == 1) + ($mostrar['p7'] == 2) + ($mostrar['p8'] == 1) +
                ($mostrar['p9'] == 3) + ($mostrar['p10'] == 2) + ($mostrar['p11'] == 1) + ($mostrar['p12'] == 3) +
                ($mostrar['p13'] == 1) + ($mostrar['p14'] == 2) + ($mostrar['p15'] == 1) + ($mostrar['p16'] == 3) +
                ($mostrar['p17'] == 2) + ($mostrar['p18'] == 1) + ($mostrar['p19'] == 2) + ($mostrar['p20'] == 3) +
                ($mostrar['p21'] == 3) + ($mostrar['p22'] == 1) + ($mostrar['p23'] == 2) + ($mostrar['p24'] == 1) +
                ($mostrar['p25'] == 2) + ($mostrar['p26'] == 2) + ($mostrar['p27'] == 1) + ($mostrar['p28'] == 2) +
                ($mostrar['p29'] == 3) + ($mostrar['p30'] == 2) + ($mostrar['p31'] == 1) + ($mostrar['p32'] == 1) +
                ($mostrar['p33'] == 3) + ($mostrar['p34'] == 1) + ($mostrar['p35'] == 3) + ($mostrar['p36'] == 3) +
                ($mostrar['p37'] == 2) + ($mostrar['p38'] == 3) + ($mostrar['p39'] == 3) + ($mostrar['p40'] == 1);

$kinestesicoCount = ($mostrar['p1'] == 3) + ($mostrar['p2'] == 2) + ($mostrar['p3'] == 3) + ($mostrar['p4'] == 1) +
                    ($mostrar['p5'] == 1) + ($mostrar['p6'] == 3) + ($mostrar['p7'] == 3) + ($mostrar['p8'] == 3) +
                    ($mostrar['p9'] == 2) + ($mostrar['p10'] == 1) + ($mostrar['p11'] == 3) + ($mostrar['p12'] == 1) +
                    ($mostrar['p13'] == 2) + ($mostrar['p14'] == 3) + ($mostrar['p15'] == 3) + ($mostrar['p16'] == 2) +
                    ($mostrar['p17'] == 1) + ($mostrar['p18'] == 2) + ($mostrar['p19'] == 3) + ($mostrar['p20'] == 2) +
                    ($mostrar['p21'] == 1) + ($mostrar['p22'] == 2) + ($mostrar['p23'] == 3) + ($mostrar['p24'] == 3) +
                    ($mostrar['p25'] == 3) + ($mostrar['p26'] == 1) + ($mostrar['p27'] == 3) + ($mostrar['p28'] == 1) +
                    ($mostrar['p29'] == 1) + ($mostrar['p30'] == 1) + ($mostrar['p31'] == 3) + ($mostrar['p32'] == 2) +
                    ($mostrar['p33'] == 2) + ($mostrar['p34'] == 3) + ($mostrar['p35'] == 1) + ($mostrar['p36'] == 2) +
                    ($mostrar['p37'] == 3) + ($mostrar['p38'] == 1) + ($mostrar['p39'] == 1) + ($mostrar['p40'] == 2);


?>


                                        <!-- Impresion del while de cada categoria -->
                                        <tr>
                                            <td><?php echo $mostrar['id'] ?></td>
                                            <td><?php echo $mostrar['nombre'] ?></td>
                                            <td><?php echo $visualCount; ?></td>
                                            <td><?php echo $auditivoCount; ?></td>
                                            <td><?php echo $kinestesicoCount; ?></td>
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
                                                        <p><strong>Visual: </strong><?php echo $visualCount; ?></p>
                                                        <p><strong>Auditivo: </strong><?php echo $auditivoCount; ?></p>
                                                        <p><strong>Kinestésico: </strong><?php echo $kinestesicoCount; ?></p>

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
    $visualSum = $mostrar['p1'] + $mostrar['p2'] + $mostrar['p3'] + $mostrar['p4'] + $mostrar['p5'] +
            $mostrar['p6'] + $mostrar['p7'] + $mostrar['p8'] + $mostrar['p9'] + $mostrar['p10'] +
            $mostrar['p11'] + $mostrar['p12'] + $mostrar['p13'] + $mostrar['p14'] + $mostrar['p15'] +
            $mostrar['p16'] + $mostrar['p17'] + $mostrar['p18'] + $mostrar['p19'] + $mostrar['p20'] +
            $mostrar['p21'] + $mostrar['p22'] + $mostrar['p23'] + $mostrar['p24'] + $mostrar['p25'] +
            $mostrar['p26'] + $mostrar['p27'] + $mostrar['p28'] + $mostrar['p29'] + $mostrar['p30'] +
            $mostrar['p31'] + $mostrar['p32'] + $mostrar['p33'] + $mostrar['p34'] + $mostrar['p35'] +
            $mostrar['p36'] + $mostrar['p37'] + $mostrar['p38'] + $mostrar['p39'] + $mostrar['p40'];

    $auditivoSum = $mostrar['p1'] + $mostrar['p2'] + $mostrar['p3'] + $mostrar['p4'] + $mostrar['p5'] +
            $mostrar['p6'] + $mostrar['p7'] + $mostrar['p8'] + $mostrar['p9'] + $mostrar['p10'] +
            $mostrar['p11'] + $mostrar['p12'] + $mostrar['p13'] + $mostrar['p14'] + $mostrar['p15'] +
            $mostrar['p16'] + $mostrar['p17'] + $mostrar['p18'] + $mostrar['p19'] + $mostrar['p20'] +
            $mostrar['p21'] + $mostrar['p22'] + $mostrar['p23'] + $mostrar['p24'] + $mostrar['p25'] +
            $mostrar['p26'] + $mostrar['p27'] + $mostrar['p28'] + $mostrar['p29'] + $mostrar['p30'] +
            $mostrar['p31'] + $mostrar['p32'] + $mostrar['p33'] + $mostrar['p34'] + $mostrar['p35'] +
            $mostrar['p36'] + $mostrar['p37'] + $mostrar['p38'] + $mostrar['p39'] + $mostrar['p40'];

    $kinestesicoSum = $mostrar['p1'] + $mostrar['p2'] + $mostrar['p3'] + $mostrar['p4'] + $mostrar['p5'] +
            $mostrar['p6'] + $mostrar['p7'] + $mostrar['p8'] + $mostrar['p9'] + $mostrar['p10'] +
            $mostrar['p11'] + $mostrar['p12'] + $mostrar['p13'] + $mostrar['p14'] + $mostrar['p15'] +
            $mostrar['p16'] + $mostrar['p17'] + $mostrar['p18'] + $mostrar['p19'] + $mostrar['p20'] +
            $mostrar['p21'] + $mostrar['p22'] + $mostrar['p23'] + $mostrar['p24'] + $mostrar['p25'] +
            $mostrar['p26'] + $mostrar['p27'] + $mostrar['p28'] + $mostrar['p29'] + $mostrar['p30'] +
            $mostrar['p31'] + $mostrar['p32'] + $mostrar['p33'] + $mostrar['p34'] + $mostrar['p35'] +
            $mostrar['p36'] + $mostrar['p37'] + $mostrar['p38'] + $mostrar['p39'] + $mostrar['p40'];
    
    // Contar cuántas veces se ha marcado cada columna
$visualCount = ($mostrar['p1'] == 2) + ($mostrar['p2'] == 1) + ($mostrar['p3'] == 2) + ($mostrar['p4'] == 3) +
                ($mostrar['p5'] == 3) + ($mostrar['p6'] == 2) + ($mostrar['p7'] == 1) + ($mostrar['p8'] == 2) +
                ($mostrar['p9'] == 1) + ($mostrar['p10'] == 3) + ($mostrar['p11'] == 2) + ($mostrar['p12'] == 2) +
                ($mostrar['p13'] == 3) + ($mostrar['p14'] == 1) + ($mostrar['p15'] == 2) + ($mostrar['p16'] == 1) +
                ($mostrar['p17'] == 3) + ($mostrar['p18'] == 3) + ($mostrar['p19'] == 1) + ($mostrar['p20'] == 1) +
                ($mostrar['p21'] == 2) + ($mostrar['p22'] == 3) + ($mostrar['p23'] == 1) + ($mostrar['p24'] == 2) +
                ($mostrar['p25'] == 1) + ($mostrar['p26'] == 3) + ($mostrar['p27'] == 2) + ($mostrar['p28'] == 3) +
                ($mostrar['p29'] == 2) + ($mostrar['p30'] == 3) + ($mostrar['p31'] == 2) + ($mostrar['p32'] == 3) +
                ($mostrar['p33'] == 1) + ($mostrar['p34'] == 2) + ($mostrar['p35'] == 2) + ($mostrar['p36'] == 1) +
                ($mostrar['p37'] == 1) + ($mostrar['p38'] == 2) + ($mostrar['p39'] == 2) + ($mostrar['p40'] == 3);

$auditivoCount = ($mostrar['p1'] == 1) + ($mostrar['p2'] == 3) + ($mostrar['p3'] == 1) + ($mostrar['p4'] == 2) +
                ($mostrar['p5'] == 2) + ($mostrar['p6'] == 1) + ($mostrar['p7'] == 2) + ($mostrar['p8'] == 1) +
                ($mostrar['p9'] == 3) + ($mostrar['p10'] == 2) + ($mostrar['p11'] == 1) + ($mostrar['p12'] == 3) +
                ($mostrar['p13'] == 1) + ($mostrar['p14'] == 2) + ($mostrar['p15'] == 1) + ($mostrar['p16'] == 3) +
                ($mostrar['p17'] == 2) + ($mostrar['p18'] == 1) + ($mostrar['p19'] == 2) + ($mostrar['p20'] == 3) +
                ($mostrar['p21'] == 3) + ($mostrar['p22'] == 1) + ($mostrar['p23'] == 2) + ($mostrar['p24'] == 1) +
                ($mostrar['p25'] == 2) + ($mostrar['p26'] == 2) + ($mostrar['p27'] == 1) + ($mostrar['p28'] == 2) +
                ($mostrar['p29'] == 3) + ($mostrar['p30'] == 2) + ($mostrar['p31'] == 1) + ($mostrar['p32'] == 1) +
                ($mostrar['p33'] == 3) + ($mostrar['p34'] == 1) + ($mostrar['p35'] == 3) + ($mostrar['p36'] == 3) +
                ($mostrar['p37'] == 2) + ($mostrar['p38'] == 3) + ($mostrar['p39'] == 3) + ($mostrar['p40'] == 1);

$kinestesicoCount = ($mostrar['p1'] == 3) + ($mostrar['p2'] == 2) + ($mostrar['p3'] == 3) + ($mostrar['p4'] == 1) +
                    ($mostrar['p5'] == 1) + ($mostrar['p6'] == 3) + ($mostrar['p7'] == 3) + ($mostrar['p8'] == 3) +
                    ($mostrar['p9'] == 2) + ($mostrar['p10'] == 1) + ($mostrar['p11'] == 3) + ($mostrar['p12'] == 1) +
                    ($mostrar['p13'] == 2) + ($mostrar['p14'] == 3) + ($mostrar['p15'] == 3) + ($mostrar['p16'] == 2) +
                    ($mostrar['p17'] == 1) + ($mostrar['p18'] == 2) + ($mostrar['p19'] == 3) + ($mostrar['p20'] == 2) +
                    ($mostrar['p21'] == 1) + ($mostrar['p22'] == 2) + ($mostrar['p23'] == 3) + ($mostrar['p24'] == 3) +
                    ($mostrar['p25'] == 3) + ($mostrar['p26'] == 1) + ($mostrar['p27'] == 3) + ($mostrar['p28'] == 1) +
                    ($mostrar['p29'] == 1) + ($mostrar['p30'] == 1) + ($mostrar['p31'] == 3) + ($mostrar['p32'] == 2) +
                    ($mostrar['p33'] == 2) + ($mostrar['p34'] == 3) + ($mostrar['p35'] == 1) + ($mostrar['p36'] == 2) +
                    ($mostrar['p37'] == 3) + ($mostrar['p38'] == 1) + ($mostrar['p39'] == 1) + ($mostrar['p40'] == 2);



                              // Crear un array para los datos del gráfico
                            $chartData = array(
                                array('Tipo', 'Cantidad'),
                                array('Visual', $visualCount),
                                array('Auditivo', $auditivoCount),
                                array('Kinestesico', $kinestesicoCount)
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
                        </div>
                    </div>
                </main>
<?php 
    include 'recursos/footer.php';
?>