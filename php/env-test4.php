<?php
        include 'sesion.php';
        // Obtener el nombre del usuario desde la variable de sesión
        $nombreUsuario = $_SESSION['nombre'];
        // Mandamos a llamar la conexion a la bd 
        include_once('config.php');

        $aprendizaje = 0; 
        $psicoemocional = 0;
        $social = 0;
        $proyecto = 0;

        if(isset($_POST['submit'])){
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
          
          $aprendizaje += $p1 + $p5 + $p9 + $p13 + $p17; 
          $psicoemocional += $p2 + $p6 + $p10 + $p14 + $p18;
          $social += $p3 + $p7 + $p11 + $p15 + $p19;
          $proyecto += $p4 + $p8 + $p12 + $p16 + $p20;
          
          $consulta = "INSERT INTO respuestas4 (nombre ,aprendizaje, psicoemocional, social, proyecto) VALUES ('$nombreUsuario', '$aprendizaje', '$psicoemocional', '$social', '$proyecto')";
          $resultado = $con->query($consulta);
          if ($resultado==true) {
              echo "<script>alert('¡Los datos han sido guardados correctamente!');</script>";
              header('../alumnos/index.php');
              die();
            }else{
              echo "<script>alert('Algo ha salido mal... Inténtalo de nuevo.');</script>";
              echo "<script>window.history.back();</script>";
              }
            }
          ?>