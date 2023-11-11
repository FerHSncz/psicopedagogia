$(document).ready(function() {
     // Inicializar la tabla
    $('#tablaAlumnos').DataTable({
        "ajax": "../php/get-alumnos-php", // Ruta al archivo PHP que obtiene los datos de los alumnos
        "columns": [
            { "data": "id" },
            { "data": "nombre" },
            { "data": "telefono" },
            { "data": "carrera" },
            { "data": "email" }
        ]
    });
});