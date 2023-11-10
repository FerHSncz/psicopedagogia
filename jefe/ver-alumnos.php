<?php 
    include '../config.php';
    include 'php/sesion.php';
    include 'recursos/header.php';
?>
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Total de Alumnos Registrados</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Vista Jefe de Área</li>
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
                            <!-- Procesos del DataTables) -->
                            <!-- jQuery (colocar antes del script de DataTables) -->
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                                <!-- DataTables JS -->
                            <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
                                <!-- DataTables JS para la paginacion-->
                            <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
                                <!-- Script de datos de alumnos -->
                            <script>
                                $(document).ready(function() {
                                  // Inicializar la tabla
                                    $('#tablaAlumnos').DataTable({
                                        "ajax": "get-alumnos.php", // Ruta al archivo PHP que obtiene los datos de los alumnos
                                        "columns": [
                                            { "data": "id" },
                                            { "data": "nombre" },
                                            { "data": "telefono" },
                                            { "data": "carrera" },
                                            { "data": "email" }
                                        ]
                                    });
                                });
                            </script>
                        </div>
                    </div>
                </main>
<?php 
    include 'recursos/footer.php';
?>