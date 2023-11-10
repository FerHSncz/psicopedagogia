<?php 
    include '../config.php';
    include 'php/session.php';
    include 'recursos/header.php';
?>
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Total de Alumnos Registrados</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Vista Psicologo</li>
                        </ol>
                        <div class="row">
                        <div class="container">
                            <!-- Tabla y procesos -->
                            <table id="tablaAlumnos" class="table table-striped table-bordered text-center"> <!-- Proceso del DataTables para el id="tablaAlumnos") -->
                                <div class="font-monospace">La siguiente tabla muestra el <strong>Total de Alumnos Registrados en el Sistema:</strong></div>
                                <br>
                                <thead class="bg-dark text-white">
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Teléfono</th>
                                        <th>Carrera</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        </div><br>
                    </div>
                </main>
                <script src="js/alumnos.js"></script>
<?php 
    include 'recursos/footer.php';
?>