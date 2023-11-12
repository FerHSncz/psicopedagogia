<?php
   // Configuración de la BD local    
    $hostname = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $dbname   = "psicopedagogia";

    // Hosting de always data
    // $hostname = "mysql-ferhsncz.alwaysdata.net"; 
    // $username = "ferhsncz"; 
    // $password = "lf3003hs"; 
    // $dbname   = "ferhsncz_psicopedagogia";
    
   // Crear conexión a la BD  
    $con = new mysqli($hostname, $username, $password, $dbname); 
    
   // Verifica la conexión
    if ($con->connect_error) { 
        die("Conexión fallida: " . $con->connect_error); 
    }
?>