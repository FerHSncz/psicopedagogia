<?php 
    include '../php/config.php';
    include '../php/sesion.php';
    include 'recursos/header.php';
?>
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Resultados del:</h1>
                        <h3 class="mt-4">Canal de Aprendizaje Cuestionario Riesgos Psicosociales</h3>
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
                                                    <div style="width: 450px; height: 450px"> <!-- canvas de la grafica -->
                                                    <!-- cdn chart js -->
                                                        <canvas id="<?php echo $mostrar['id']; ?>" style="display: block;box-sizing: border-box;height: 100px;width: 100px;background: white;"></canvas>
                                                        <script>
                                                        var ctx = document.getElementById("<?php echo $mostrar['id']; ?>");
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
                                                    </div>
                                                    <!-- script de la grafica -->
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
                    </div>
                </div>
                </main>
<?php 
    include 'recursos/footer.php';
?>