<?php 
    include '../config.php';
    include 'php/sesion.php';
    include 'php/global-test1.php';
    include 'recursos/header.php';
?>
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Resultado Global del:</h1>
                        <h3 class="mt-4">Canal de Aprendizaje de Preferencia Lynn O’Brien (1990)</h3>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Vista Jefe de Área</li>
                        </ol>
                        <div class="row">
                        <div class="container">
                        <div class="font-monospace">A continuacion se muestra la Gráfica General de Resultados del <strong>Test de Canal de Aprendizaje de Preferencia de Lynn O’Brien (1990).</strong></div>                        
                        <!-- Div para la gráfica de pastel -->
                        <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
                    </div>
                    <!-- Incluir la librería de Google Charts -->
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <script type="text/javascript">
                        // Cargar la librería de visualización y preparar la función para dibujar la gráfica.
                        google.charts.load('current', {'packages':['corechart']});
                        google.charts.setOnLoadCallback(drawChart);
                        function drawChart() {
                            var data = google.visualization.arrayToDataTable([
                                ['Categoría', 'Suma'],
                                ['Visual', <?php echo $visualSum; ?>],
                                ['Auditivo', <?php echo $auditivoSum; ?>],
                                ['Kinestésico', <?php echo $kinestesicoSum; ?>]
                            ]);
                            var options = {
                                title: 'Distribución General de Estilos de Aprendizaje',
                                is3D: true,
                            };
                            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
                            chart.draw(data, options);
                        }
                    </script>
                </main>
<?php 
    include 'recursos/footer.php';
?>