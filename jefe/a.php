

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <canvas id="miGrafica"></canvas>
    <!-- <script type="module" src="dimensions.js"></script> -->
    <script>
        // Obtén una referencia al elemento canvas
        var ctx = document.getElementById('miGrafica').getContext('2d');

        // Define los datos para la gráfica
        var data = {
            labels: ['Etiqueta 1', 'Etiqueta 2', 'Etiqueta 3', 'Etiqueta 4'],
            datasets: [
                {
                    label: 'Mi Gráfica de Barras',
                    data: [12, 19, 3, 5],
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }
            ]
        };

        // Define las opciones de la gráfica
        var options = {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        };

        // Crea la gráfica
        var miGrafica = new Chart(ctx, {
            type: 'bar',
            data: data,
            options: options
        });

    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</body>
</html>