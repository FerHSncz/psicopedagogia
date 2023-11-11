<?php 
    include '../php/config.php';
    include '../php/sesion.php';
    include '../php/global-test4.php';
    include 'recursos/header.php';
?>
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Resultado Global del:</h1>
                    <h3 class="mt-4">Canal de Aprendizaje Cuestionario de Riesgos Psicosociales</h3>
                    <div class="row">
                        <div class="container">
                            <div class="font-monospace">
                                A continuacion se muestra la Gráfica General de Resultados del <strong>Test de Canal de Aprendizaje Cuestionario Honey-Alonso.</strong>
                            </div>
                            <title>Resultados Finales</title>
                            <canvas id="chart1" style="display: block;box-sizing: border-box;height: 50px;width:50px;background: white;"></canvas>
                        </div>
                    </div>
                </div>
                <!-- scripts -->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
                </main>
<?php 
    include 'recursos/footer.php';
?>