<?php
   // Configuración de la BD    
    $hostname = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $dbname   = "psicopedagogia";
    
   // Crear conexión a la BD  
    $con = new mysqli($hostname, $username, $password, $dbname); 
    
   // Verifica la conexión
    if ($con->connect_error) { 
        die("Conexión fallida: " . $con->connect_error); 
    }
?>