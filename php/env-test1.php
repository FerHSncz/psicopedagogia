<?php
        // Obtener el nombre del usuario desde la variable de sesión
        $nombreUsuario = $_SESSION['nombre'];

        include_once('config.php');

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
            $p21 = $con->real_escape_string($_POST['p21']);
            $p22 = $con->real_escape_string($_POST['p22']);
            $p23 = $con->real_escape_string($_POST['p23']);
            $p24 = $con->real_escape_string($_POST['p24']);
            $p25 = $con->real_escape_string($_POST['p25']);
            $p26 = $con->real_escape_string($_POST['p26']);
            $p27 = $con->real_escape_string($_POST['p27']);
            $p28 = $con->real_escape_string($_POST['p28']);
            $p29 = $con->real_escape_string($_POST['p29']);
            $p30 = $con->real_escape_string($_POST['p30']);
            $p31 = $con->real_escape_string($_POST['p31']);
            $p32 = $con->real_escape_string($_POST['p32']);
            $p33 = $con->real_escape_string($_POST['p33']);
            $p34 = $con->real_escape_string($_POST['p34']);
            $p35 = $con->real_escape_string($_POST['p35']);
            $p36 = $con->real_escape_string($_POST['p36']);

            $query  = "INSERT INTO test1 (nombre, p1, p2, p3, p4, p5, p6, p7, p8, p9, p10, p11, p12, p13, p14, p15, p16, p17, p18, p19, p20, p21, p22, p23, p24, p25, p26, p27, p28, p29, p30, p31, p32, p33, p34, p35, p36) VALUES ('$nombreUsuario', '$p1','$p2','$p3', '$p4', '$p5', '$p6', '$p7', '$p8', '$p9', '$p10', '$p11', '$p12', '$p13', '$p14', '$p15', '$p16', '$p17', '$p18', '$p19', '$p20', '$p21', '$p22', '$p23', '$p24', '$p25', '$p26', '$p27', '$p28', '$p29', '$p30', '$p31', '$p32', '$p33', '$p34', '$p35', '$p36')";
            $result = $con->query($query);
            if ($result==true) {
              echo "<script>alert('¡Los datos han sido guardados correctamente!');</script>";
              header('../alumnos/index.php');
              die();
            }else{
              echo "<script>alert('No estás registrado... Inténtalo de nuevo.');</script>";
              echo "<script>window.history.back();</script>";
            }   
          }
?>