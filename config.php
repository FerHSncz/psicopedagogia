<?php
   // Configuración de la BD    
   $hostname = "localhost"; 
   $username = "id20386295_alumnos"; 
   $password = "Proyecto@9"; 
   $dbname   = "id20386295_proyecto";
    
   // Crear conexión a la BD  
   $con = new mysqli($hostname, $username, $password, $dbname); 
    
   // Verifica la conexión
   if ($con->connect_error) { 
       die("Conexión fallida: " . $con->connect_error); 
   }
?>