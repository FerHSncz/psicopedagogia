<?php include_once('../config.php');
session_start();

// Obtener el nombre del usuario desde la variable de sesión
$nombreUsuario = $_SESSION['nombre'];

if (isset($_POST['submit'])) {
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
  $p37 = $con->real_escape_string($_POST['p37']);
  $p38 = $con->real_escape_string($_POST['p38']);
  $p39 = $con->real_escape_string($_POST['p39']);
  $p40 = $con->real_escape_string($_POST['p40']);
  $p41 = $con->real_escape_string($_POST['p41']);
  $p42 = $con->real_escape_string($_POST['p42']);
  $p43 = $con->real_escape_string($_POST['p43']);
  $p44 = $con->real_escape_string($_POST['p44']);
  $p45 = $con->real_escape_string($_POST['p45']);
  $p46 = $con->real_escape_string($_POST['p46']);
  $p47 = $con->real_escape_string($_POST['p47']);
  $p48 = $con->real_escape_string($_POST['p48']);
  $p49 = $con->real_escape_string($_POST['p49']);
  $p50 = $con->real_escape_string($_POST['p50']);
  $p51 = $con->real_escape_string($_POST['p51']);
  $p52 = $con->real_escape_string($_POST['p52']);
  $p53 = $con->real_escape_string($_POST['p53']);
  $p54 = $con->real_escape_string($_POST['p54']);
  $p55 = $con->real_escape_string($_POST['p55']);
  $p56 = $con->real_escape_string($_POST['p56']);
  $p57 = $con->real_escape_string($_POST['p57']);
  $p58 = $con->real_escape_string($_POST['p58']);
  $p59 = $con->real_escape_string($_POST['p59']);
  $p60 = $con->real_escape_string($_POST['p60']);
  $p61 = $con->real_escape_string($_POST['p61']);
  $p62 = $con->real_escape_string($_POST['p62']);
  $p63 = $con->real_escape_string($_POST['p63']);
  $p64 = $con->real_escape_string($_POST['p64']);
  $p65 = $con->real_escape_string($_POST['p65']);
  $p66 = $con->real_escape_string($_POST['p66']);
  $p67 = $con->real_escape_string($_POST['p67']);
  $p68 = $con->real_escape_string($_POST['p68']);
  $p69 = $con->real_escape_string($_POST['p69']);
  $p70 = $con->real_escape_string($_POST['p70']);
  $p71 = $con->real_escape_string($_POST['p71']);
  $p72 = $con->real_escape_string($_POST['p72']);
  $p73 = $con->real_escape_string($_POST['p73']);
  $p74 = $con->real_escape_string($_POST['p74']);
  $p75 = $con->real_escape_string($_POST['p75']);
  $p76 = $con->real_escape_string($_POST['p76']);
  $p77 = $con->real_escape_string($_POST['p77']);
  $p78 = $con->real_escape_string($_POST['p78']);
  $p79 = $con->real_escape_string($_POST['p79']);
  $p80 = $con->real_escape_string($_POST['p80']);
  $query  = "INSERT INTO honey (nombre, p1, p2, p3, p4, p5, p6, p7, p8, p9, p10, p11, p12, p13, p14, p15, p16, p17, p18, p19, p20, p21, p22, p23, p24, p25, p26, p27, p28, p29, p30, p31, p32, p33, p34, p35, p36, p37, p38, p39, p40, p41, p42, p43, p44, p45, p46, p47, p48, p49, p50, p51, p52, p53, p54, p55, p56, p57, p58, p59, p60, p61, p62, p63, p64, p65, p66, p67, p68, p69, p70, p71, p72, p73, p74, p75, p76, p77, p78, p79, p80) VALUES ('$nombreUsuario', '$p1','$p2','$p3', '$p4', '$p5', '$p6', '$p7', '$p8', '$p9', '$p10', '$p11', '$p12', '$p13', '$p14', '$p15', '$p16', '$p17', '$p18', '$p19', '$p20', '$p21', '$p22', '$p23', '$p24', '$p25', '$p26', '$p27', '$p28', '$p29', '$p30', '$p31', '$p32', '$p33', '$p34', '$p35', '$p36', '$p37', '$p38','$p39','$p40', '$p41', '$p42', '$p43', '$p44', '$p45', '$p46', '$p47', '$p48', '$p49', '$p50', '$p51', '$p52', '$p53', '$p54', '$p55', '$p56', '$p57', '$p58', '$p59', '$p60', '$p61', '$p62', '$p63', '$p64', '$p65', '$p66', '$p67', '$p68', '$p69', '$p70', '$p71', '$p72', '$p73', '$p74', '$p75', '$p76', '$p77', '$p78', '$p79', '$p80')";
  $result = $con->query($query);

  if ($result==true) {
    echo "<script>alert('¡Los datos han sido guardados correctamente!');</script>";
    echo "<script>window.location.href = 'dash_alumno.php';</script>";           
    die();
  }else{
    echo "<script>alert('No estás registrado... Inténtalo de nuevo.');</script>";
    echo "<script>window.location.href = 'dash_alumno.php';</script>";
  }   
}
?>