<?php 

// Consulta SQL para obtener los datos de la tabla test1.
    $sql = "SELECT p1, p2, p3, p4, p5, p6, p7, p8, p9, p10, p11, p12, p13, p14, p15, p16, p17, p18, p19, p20, p21, p22, p23, p24, p25, p26, p27, p28, p29, p30, p31, p32, p33, p34, p35, p36, p37, p38, p39, p40, p41, p42, p43, p44, p45, p46, p47, p48, p49, p50, p51, p52, p53, p54, p55, p56, p57, p58, p59, p60, p61, p62, p63, p64, p65, p66, p67, p68, p69, p70, p71, p72, p73, p74, p75, p76, p77, p78, p79, p80 FROM honey";
    $result = $con->query($sql);

    // Variables para almacenar la suma de cada categoría.
    $activoSum = 0;
    $reflexivoSum = 0;
    $teoricoSum = 0;
    $pragmaticoSum = 0;

    // Calcular la suma de cada categoría.
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $activoSum += $row['p3'] + $row['p5'] + $row['p7'] + $row['p9'] + $row['p13'] + $row['p20'] + $row['p26'] + $row['p27'] + $row['p35'] + $row['p37'] + $row['p41'] + $row['p43'] + $row['p46'] + $row['p48'] + $row['p51'] + $row['p61'] + $row['p67'] + $row['p74'] + $row['p75'] + $row['p77'];
            $reflexivoSum += $row['p10'] + $row['p16'] + $row['p18'] + $row['p19'] + $row['p28'] + $row['p31'] + $row['p32'] + $row['p34'] + $row['p36'] + $row['p39'] + $row['p42'] + $row['p44'] + $row['p49'] + $row['p55'] + $row['p58'] + $row['p63'] + $row['p65'] + $row['p69'] + $row['p70'] + $row['p79'];
            $teoricoSum += $row['p2'] + $row['p4'] + $row['p6'] + $row['p11'] + $row['p15'] + $row['p17'] + $row['p21'] + $row['p23'] + $row['p25'] + $row['p29'] + $row['p33'] + $row['p45'] + $row['p50'] + $row['p54']  + $row['p60'] + $row['p64']  + $row['p66'] + $row['p71']  + $row['p78'] + $row['p80'];
            $pragmaticoSum += $row['p1'] + $row['p8'] + $row['p12'] + $row['p14'] + $row['p22'] + $row['p24'] + $row['p30'] + $row['p38'] + $row['p40'] + $row['p47'] + $row['p52'] + $row['p53'] + $row['p56'] + $row['p57']  + $row['p59'] + $row['p62']  + $row['p68'] + $row['p72']  + $row['p73'] + $row['p76'];
        }
    }

    // Cerrar la conexión a la base de datos.
    $con->close();

?>