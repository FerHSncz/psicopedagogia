<?php 
    include '../config.php';
    include 'php/sesion.php';
    include 'recursos/header.php';
?>
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Bienvenido</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Vista Jefe de Área</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-6 col-md-6 text-center">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Total de Psicólogos Registrados</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="ver-psicologos.php"></a>
                                        <!-- Tarjeta total de Psicologos-->
                                        <?php                                             
                                        // Consulta SQL para contar el número de psicologos en la tabla "psicologos"
                                        $sql = "SELECT COUNT(*) AS total_alumnos FROM psicologos";
                                        // Ejecutar la consulta
                                        $result = $con->query($sql);
                                        // Verificar si la consulta se ejecutó correctamente
                                        if ($result) {
                                            // Obtener el resultado como un array asociativo
                                            $row = $result->fetch_assoc();
                                            // Obtener el número de psicologos contados
                                            $total_alumnos = $row['total_alumnos'];
                                            // Mostrar el resultado                                    
                                            echo "<div class='small text-white'>El número total de psicólogos registrados es: " . $total_alumnos . "</div>";
                                            echo "<div class='small text-white'><i class='fas fa-angle-right'></i> Ver datos</div>";
                                        } else {
                                            echo "Error al ejecutar la consulta: " . $con->error;
                                        }                                        
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <!-- Tarjeta total de Alumnos -->
                            <div class="col-xl-6 col-md-6 text-center">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Total de Alumnos Registrados</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="ver-alumnos.php"></a>
                                        <!-- Tarjeta total de Alumnos-->
                                        <?php                                             
                                            // Consulta SQL para contar el número de alumnos en la tabla "alumnos"
                                            $sql = "SELECT COUNT(*) AS total_alumnos FROM alumnos";
                                            // Ejecutar la consulta
                                            $result = $con->query($sql);
                                            // Verificar si la consulta se ejecutó correctamente
                                            if ($result) {
                                                // Obtener el resultado como un array asociativo
                                                $row = $result->fetch_assoc();
                                                // Obtener el número de alumnos contados
                                                $total_alumnos = $row['total_alumnos'];
                                                // Mostrar el resultado                                    
                                                echo "<div class='small text-white'>El número total de alumnos registrados es: " . $total_alumnos . "</div>";
                                                echo "<div class='small text-white'><i class='fas fa-angle-right'></i> Ver datos</div>";
                                            } else {
                                                echo "Error al ejecutar la consulta: " . $con->error;
                                            }
                                            // Cerrar la conexión a la base de datos
                                            $con->close();
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <!-- Tarjeta Amarilla -->
                            <div class="col-xl-6 col-md-6 text-center">
                                <div class="card bg-warning mb-4">
                                    <div class="card-body">Canal de Aprendizaje de Preferencia Lynn O’Brien (1990)</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="ver-test1.php"></a>
                                        <div class="small"><i class="fas fa-angle-right"></i>Resultados</div>
                                    </div>
                                </div>
                            </div>
                            <!-- Tarjeta aqua -->
                            <div class="col-xl-6 col-md-6">
                                <div class="card bg-info text-white mb-4">
                                    <div class="card-body">Modelo PNL</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="ver-test2.php">Resultados</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Tarjeta Roja -->
                            <div class="col-xl-6 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Cuestionario HONEY-ALONSO</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="ver-test3.php">Resultados</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Cuestionario de Riesgos Psicosociales</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="ver-test4.php">Resultados</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Tarjeta gris -->
                        </div>
                    </main>

<?php
    include 'recursos/footer.php';
?>