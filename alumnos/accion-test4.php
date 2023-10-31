<?php
session_start();
?>

<!DOCTYPE html>
  <html lang="es">
    <head>
      <title>Guardando...</title>
      <!-- Required meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    </head>
    <body>
      <div class="container">
        <?php
        // Obtener el nombre del usuario desde la variable de sesión
        $nombreUsuario = $_SESSION['nombre'];

        include_once('../config.php');

          if (isset($_POST['submit'])) {
            
            //$nombre = $con->real_escape_string($_POST['nombre']);
            $p1 = $con->real_escape_string($_POST['p1']);
            $p2 = $con->real_escape_string($_POST['p2']);
            $p3 = $con->real_escape_string($_POST['p3']);
            $p4 = $con->real_escape_string($_POST['p4']);
            $p5 = $con->real_escape_string($_POST['p5']);
            $p6 = $con->real_escape_string($_POST['p6']);
            $p7 = $con->real_escape_string($_POST['p7']);
            $p8 = $con->real_escape_string($_POST['p8']);
            $p9 = $con->real_escape_string($_POST['p9']);
            $p10 = $con->real_escape_string($_POST['p10']);
            $p11 = $con->real_escape_string($_POST['p11']);
            $p12 = $con->real_escape_string($_POST['p12']);
            $p13 = $con->real_escape_string($_POST['p13']);
            $p14 = $con->real_escape_string($_POST['p14']);
            $p15 = $con->real_escape_string($_POST['p15']);
            $p16 = $con->real_escape_string($_POST['p16']);
            $p17 = $con->real_escape_string($_POST['p17']);
            $p18 = $con->real_escape_string($_POST['p18']);
            $p19 = $con->real_escape_string($_POST['p19']);
            $p20 = $con->real_escape_string($_POST['p20']);

            $query  = "INSERT INTO riesgospsicosociales (nombre, p1, p2, p3, p4, p5, p6, p7, p8, p9, p10, p11, p12, p13, p14, p15, p16, p17, p18, p19, p20) VALUES ('$nombreUsuario', '$p1','$p2','$p3', '$p4', '$p5', '$p6', '$p7', '$p8', '$p9', '$p10', '$p11', '$p12', '$p13', '$p14', '$p15', '$p16', '$p17', '$p18', '$p19', '$p20')";
            $result = $con->query($query);
            if ($result==true) {
              echo "<script>alert('¡Los datos han sido guardados correctamente!');</script>";
              echo "<script>window.location.href = 'index.php';</script>";           
              die();
            }else{
              echo "<script>alert('No estás registrado... Inténtalo de nuevo.');</script>";
              echo "<script>window.location.href = 'index.php';</script>";
            }   
          }
        ?>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    </body>
</html>