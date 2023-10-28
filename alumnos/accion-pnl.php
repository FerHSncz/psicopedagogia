<?php include("../config.php");

session_start();

// Obtener el nombre del usuario desde la variable de sesión
$nombreUsuario = $_SESSION['nombre'];

if (isset($_POST['registrar'])) {
	$p1 = trim($_POST['p1']);
	$p2 = trim($_POST['p2']);
	$p3 = trim($_POST['p3']);
	$p4 = trim($_POST['p4']);
	$p5 = trim($_POST['p5']);
	$p6 = trim($_POST['p6']);
	$p7 = trim($_POST['p7']);
	$p8 = trim($_POST['p8']);
	$p9 = trim($_POST['p9']);
	$p10 = trim($_POST['p10']);
	$p11 = trim($_POST['p11']);
	$p12 = trim($_POST['p12']);
	$p13 = trim($_POST['p13']);
	$p14 = trim($_POST['p14']);
	$p15 = trim($_POST['p15']);
	$p16 = trim($_POST['p16']);
	$p17 = trim($_POST['p17']);
	$p18 = trim($_POST['p18']);
	$p19 = trim($_POST['p19']);
	$p20 = trim($_POST['p20']);
	$p21 = trim($_POST['p21']);
	$p22 = trim($_POST['p22']);
	$p23 = trim($_POST['p23']);
	$p24 = trim($_POST['p24']);
	$p25 = trim($_POST['p25']);
	$p26 = trim($_POST['p26']);
	$p27 = trim($_POST['p27']);
	$p28 = trim($_POST['p28']);
	$p29 = trim($_POST['p29']);
	$p30 = trim($_POST['p30']);
	$p31 = trim($_POST['p31']);
	$p32 = trim($_POST['p32']);
	$p33 = trim($_POST['p33']);
	$p34 = trim($_POST['p34']);
	$p35 = trim($_POST['p35']);
	$p36 = trim($_POST['p36']);
	$p37 = trim($_POST['p37']);
	$p38 = trim($_POST['p38']);
	$p39 = trim($_POST['p39']);
	$p40 = trim($_POST['p40']);
	$consulta = "INSERT INTO pnl(nombre, p1, p2, p3, p4, p5, p6, p7, p8, p9, p10, p11, p12, p13, p14, p15, p16, p17, p18, p19, p20, p21, p22, p23, p24, p25, p26, p27, p28, p29, p30, p31, p32, p33, p34, p35, p36, p37, p38, p39, p40) VALUES('$nombreUsuario', '$p1', '$p2',  '$p3', '$p4', '$p5', '$p6', '$p7', '$p8', '$p9', '$p10', '$p11', '$p12', '$p13', '$p14', '$p15', '$p16', '$p17', '$p18', '$p19', '$p20', '$p21', '$p22', '$p23', '$p24', '$p25', '$p26', '$p27', '$p28', '$p29', '$p30', '$p31', '$p32', '$p33', '$p34', '$p35', '$p36', '$p37', '$p38', '$p39', '$p40')";
	$resultado = mysqli_query($con, $consulta);

	if ($resultado==true) {
		echo "<script>alert('¡Los datos han sido guardados correctamente!');</script>";
        echo "<script>window.location.href = 'dash_alumno.php';</script>";           
	die();
	}else{
		echo "<script>alert('No estás registrado... Inténtalo de nuevo.');</script>";
        echo "<script>window.location.href = 'dash_alumno.php';</script>";
	} 
}
?>