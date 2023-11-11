$(document).ready(function() {
    // Inicializar la tabla
    $('#tablaPsicologos').DataTable({
        "ajax": "../php/get-psicologos.php", // Ruta al archivo PHP que obtiene los datos de los alumnos
        "columns": [
            { "data": "id" },
            { "data": "nombre" },
            { "data": "email" },
            { "data": "telefono" }                                                             
        ]
    });
});