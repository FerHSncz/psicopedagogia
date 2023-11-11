<?php 
    include '../php/config.php';            // Configuraciond del acceso a la base de datos
    include '../php/sesion.php';          // Si el usuario no tiene la sesion iniciada será redirigido al inicio de sesion
    include '../php/global-test2.php';  // Operacion que se lleva acabo para calcular la grafica global
    include 'recursos/header.php';
?>
                <main>
                    <div class="container-fluid px-4">
                    <h1 class="mt-4">Resultado Global del:</h1>
                    <h3 class="mt-4">Canal de Aprendizaje Cuestionario Honey-Alonso</h3>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Vista Psicologo</li>
                    </ol>
                    <div class="row">
                        <div class="container">
                            <div class="font-monospace">A continuacion se muestra la Gráfica General de Resultados del <strong>Test de Canal de Aprendizaje Cuestionario Honey-Alonso.</strong></div>
                            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                            <title>Resultados Finales</title>
                            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                            <canvas id="chart1" style="display: block;box-sizing: border-box;height: 450px;width: 450px;background: white;"></canvas>
                            <script>
                                function goBack() {
                                    window.history.back();
                                }
                            </script>
                            <script>
                                var ctx = document.getElementById("chart1");
                                var data = {
                                    labels: ["ACTIVO", "REFLEXIVO", "TEORICO", "PRAGMATICO"],
                                    datasets: [{
                                        label: 'Perfil de Aprendizaje',
                                        data:[
                                            <?php echo $activo; ?>,
                                            <?php echo $reflexivo; ?>,
                                            <?php echo $teorico; ?>,
                                            <?php echo $pragmatico; ?>
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
                </main>
<?php 
    include 'recursos/footer.php';
?>