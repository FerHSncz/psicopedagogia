<?php 
    include '../php/config.php';
    include '../php/sesion.php';
    include '../php/global-test3.php';
    include 'recursos/header.php';
?>
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Resultado Global del:</h1>
                        <h3 class="mt-4">Canal de Aprendizaje Modelo PNL</h3>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Vista Jefe de Área</li>
                        </ol>
                        <div class="row">
                        <div class="container">
                            <div class="font-monospace">A continuacion se muestra la Gráfica General de Resultados del <strong>Test de Canal de Aprendizaje Modelo PNL.</strong></div>
                            <!-- Incluir la librería de Google Charts -->
                            <script type = "text/javascript" src = "https://www.gstatic.com/charts/loader.js"></script>
                            <script type = "text/javascript">
                            // Cargar la librería de visualización y preparar la función para dibujar la gráfica
                                google.charts.load('current', {packages: ['corechart']});     
                            </script>
                            <div id = "container" style = "width: 510px; height: 500px; margin: 0 auto"></div>
                            <script language = "JavaScript">
                                function drawChart() {
                                    // Define the chart to be drawn.
                                    var data = google.visualization.arrayToDataTable([
                                        ['', ''],
                                        ['Visual', <?php echo $visualCount; ?>],
                                        ['Auditivo', <?php echo $auditivoCount; ?>],
                                        ['Kinestésico', <?php echo $kinestesicoCount; ?>]
                                    ]);
                                    var options = { title: 'Distribución General de Estilos de Aprendizaje', is3D: true, };
                                    // Instantiate and draw the chart.
                                    var chart = new google.visualization.PieChart(document.getElementById('container'));
                                    chart.draw(data, options);
                                }
                                google.charts.setOnLoadCallback(drawChart);
                            </script>
                        <!-- Div para la gráfica de pastel -->
                        <div id="piechart_3d" style="width: 900px; height: 5px;"></div>
                    </div>
                </main>
<?php 
    include 'recursos/footer.php';
?>