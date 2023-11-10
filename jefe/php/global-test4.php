<?php 
    // Consulta SQL para obtener los datos de la tabla test1.
    $sql = "SELECT p1, p2, p3, p4, p5, p6, p7, p8, p9, p10, p11, p12, p13, p14, p15, p16, p17, p18, p19, p20 FROM riesgospsicosociales";
    $result = $con->query($sql);
    // Variables para almacenar la suma de cada categoría.
    $AprendizajeSum = 0;
    $PsicoemocionalSum = 0;
    $SocialSum = 0;
    $ProyectoSum = 0;
    // Calcular la suma de cada categoría.
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $AprendizajeSum += $row['p1'] + $row['p5'] + $row['p9'] + $row['p13'] + $row['p17'];
            $PsicoemocionalSum += $row['p2'] + $row['p6'] + $row['p10'] + $row['p14'] + $row['p18'];
            $SocialSum += $row['p3'] + $row['p7'] + $row['p11'] + $row['p15'] + $row['p19'];
            $ProyectoSum += $row['p4'] + $row['p8'] + $row['p12'] + $row['p16'] + $row['p20'];
        }
    }
    // Cerrar la conexión a la base de datos.
    $con->close();
?>