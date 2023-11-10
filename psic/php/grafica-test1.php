<?php 
    // Consulta SQL para obtener los datos de la tabla test1.
    $sql = "SELECT p1, p2, p3, p4, p5, p6, p7, p8, p9, p10, p11, p12, p13, p14, p15, p16, p17, p18, p19, p20, p21, p22, p23, p24, p25, p26, p27, p28, p29, p30, p31, p32, p33, p34, p35, p36 FROM test1";
    $result = $con->query($sql);

    // Variables para almacenar la suma de cada categoría.
    $visualSum = 0;
    $auditivoSum = 0;
    $kinestesicoSum = 0;

    // Calcular la suma de cada categoría.
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $visualSum += $row['p1'] + $row['p5'] + $row['p9'] + $row['p10'] + $row['p11'] + $row['p16'] + $row['p17'] + $row['p22'] + $row['p26'] + $row['p27'] + $row['p32'] + $row['p36'];
            $auditivoSum += $row['p2'] + $row['p3'] + $row['p12'] + $row['p13'] + $row['p15'] + $row['p19'] + $row['p20'] + $row['p23'] + $row['p24'] + $row['p28'] + $row['p29'] + $row['p33'];
            $kinestesicoSum += $row['p4'] + $row['p6'] + $row['p7'] + $row['p8'] + $row['p14'] + $row['p18'] + $row['p21'] + $row['p25'] + $row['p30'] + $row['p31'] + $row['p34'] + $row['p35'];
        }
    }

    // Cerrar la conexión a la base de datos.
    //$con->close();
?>