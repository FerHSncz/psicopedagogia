<?php
    session_start();
    include '../config.php'; 
	/*Este codigo manda al archivo index.html si se trata de ingresar al dashboard sin haber iniciado sesion*/
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<title>Test 1 - Canal de Aprendizaje de Preferencia</title>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
		<!-- Estilos CSS locales -->
		<link rel="stylesheet" href="css/estilos.css">
		<link rel="stylesheet" href="css/fondo.css">
		<link rel="stylesheet" href="css/centrar.css">		
	</head>
	<body>
		<!-- Barra de navegación -->
		<nav class="navbar navbar-light bg-light">
		<a class="navbar-brand" href="index.php"><strong style="color: red;"></strong></a>
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link" href="ver.php"><strong></strong></a>
				</li>
			</ul>
		</nav>
		<!-- Fin de la Barra de navegación -->
		<!-- Inicio de Formulario -->
		<h1 align="center" style="padding: 0px;"><strong></strong></h1>
		<div class="container">
            <img style=" margin:10px auto; display:block;" src="../img/UTCGG.png" width="55" height="50" align="">
		</div>      	
		<div class="container mt-2">
			<form id="formulario" action="respuestas.php" method="POST" autocomplete="off">
				<div class=""> <!-- row <input type="submit" value="Siguiente" name="registro">-->
					<style> table tr:hover{ background-color: #bbd6ef !important; } </style>
					<table width="100%" name="aprendizaje" class="table table-striped table-bordered table-hover">
						<thead>
							<tr>											
								<center><b><legend><strong>Canal de Aprendizaje de Preferencia de Lynn O’Brien (1990)</strong></legend></b></center>
								<p>Lea cuidadosamente cada oración y piense de qué manera se aplica a usted. En cada línea escriba el número que mejor describe su reacción a cada oración. <b>Casi nunca: 1 - Rara vez: 2 - A veces: 3 - Frecuentemente: 4 - Casi siempre: 5 </b></p>
							</tr>
							<div class="progress">
								<div id="progress-bar" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="36" style="width: 0%"></div>
							</div><br>
						</thead>
						<tbody>
							<tr class="odd" id="row_0">
								<td>1. Puedo recordar algo mejor si lo escribo.</td>
								<td>
									1 <input type="radio" name="p1" id="1" value="1" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									2 <input type="radio" name="p1" id="2" value="2" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									3 <input type="radio" name="p1" id="3" value="3" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									4 <input type="radio" name="p1" id="4" value="4" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									5 <input type="radio" name="p1" id="5" value="5" required onclick="actualizarProgreso()"/>
								</td>
							</tr>
							<tr class="odd" id="row_0">
								<td>2. Al leer, oigo las palabras en mi cabeza o leo en voz alta.</td>
								<td>
									1 <input type="radio" name="p2" id="1" value="1" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									2 <input type="radio" name="p2" id="2" value="2" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									3 <input type="radio" name="p2" id="3" value="3" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									4 <input type="radio" name="p2" id="4" value="4" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									5 <input type="radio" name="p2" id="5" value="5" required onclick="actualizarProgreso()"/>
								</td>
							</tr>
							<tr class="odd" id="row_0">
								<td>
									3. Necesito hablar las cosas para entenderlas mejor. 			
								</td>
								<td>
									1 <input type="radio" name="p3" id="1" value="1" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									2 <input type="radio" name="p3" id="2" value="2" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									3 <input type="radio" name="p3" id="3" value="3" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									4 <input type="radio" name="p3" id="4" value="4" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									5 <input type="radio" name="p3" id="5" value="5" required onclick="actualizarProgreso()"/>
								</td>
							</tr>
							<tr class="odd" id="row_0">
								<td>4. No me gusta leer o escuchar instrucciones, prefiero simplemente comenzar a hacer las cosas.</td>
								<td>
									1 <input type="radio" name="p4" id="1" value="1" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									2 <input type="radio" name="p4" id="2" value="2" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									3 <input type="radio" name="p4" id="3" value="3" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									4 <input type="radio" name="p4" id="4" value="4" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									5 <input type="radio" name="p4" id="5" value="5" required onclick="actualizarProgreso()"/>
								</td>
							</tr>
							<tr class="odd" id="row_0">
								<td>5. Puedo visualizar imágenes en mi cabeza.</td>
								<td>
									1 <input type="radio" name="p5" id="1" value="1" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									2 <input type="radio" name="p5" id="2" value="2" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									3 <input type="radio" name="p5" id="3" value="3" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									4 <input type="radio" name="p5" id="4" value="4" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									5 <input type="radio" name="p5" id="5" value="5" required onclick="actualizarProgreso()"/>
								</td>
							</tr>
							<tr class="odd" id="row_0">
								<td>6. Puedo estudiar mejor si escucho música.</td>
								<td>
									1 <input type="radio" name="p6" id="1" value="1" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									2 <input type="radio" name="p6" id="2" value="2" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									3 <input type="radio" name="p6" id="3" value="3" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									4 <input type="radio" name="p6" id="4" value="4" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									5 <input type="radio" name="p6" id="5" value="5" required onclick="actualizarProgreso()"/>
								</td>
							</tr>
							<tr class="odd" id="row_0">
								<td>7. Necesito recreos frecuentes cuando estudio.</td>
								<td>
									1 <input type="radio" name="p7" id="1" value="1" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									2 <input type="radio" name="p7" id="2" value="2" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									3 <input type="radio" name="p7" id="3" value="3" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									4 <input type="radio" name="p7" id="4" value="4" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									5 <input type="radio" name="p7" id="5" value="5" required onclick="actualizarProgreso()"/>
								</td>
							</tr>
							<tr class="odd" id="row_0">
								<td>8. Pienso mejor cuando tengo la libertad de moverme, estar sentado detrás de un escritorio no es para mí.</td>
								<td>
									1 <input type="radio" name="p8" id="1" value="1" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									2 <input type="radio" name="p8" id="2" value="2" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									3 <input type="radio" name="p8" id="3" value="3" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									4 <input type="radio" name="p8" id="4" value="4" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									5 <input type="radio" name="p8" id="5" value="5" required onclick="actualizarProgreso()"/>
								</td>
							</tr>
							<tr class="odd" id="row_0">
								<td>9. Tomo muchas notas de lo que leo y escucho.</td>
								<td>
									1 <input type="radio" name="p9" id="1" value="1" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									2 <input type="radio" name="p9" id="2" value="2" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									3 <input type="radio" name="p9" id="3" value="3" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									4 <input type="radio" name="p9" id="4" value="4" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									5 <input type="radio" name="p9" id="5" value="5" required onclick="actualizarProgreso()"/>
								</td>
							</tr>
							<tr class="odd" id="row_0">
								<td>10. Me ayuda MIRAR a la persona que está hablando. Me mantiene enfocado.</td>
								<td>
									1 <input type="radio" name="p10" id="1" value="1" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									2 <input type="radio" name="p10" id="2" value="2" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									3 <input type="radio" name="p10" id="3" value="3" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									4 <input type="radio" name="p10" id="4" value="4" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									5 <input type="radio" name="p10" id="5" value="5" required onclick="actualizarProgreso()"/>
								</td>
							</tr>
							<tr class="odd" id="row_0">
								<td>11. Se me hace difícil entender lo que una persona está diciendo si hay ruidos alrededor.</td>
								<td>
									1 <input type="radio" name="p11" id="1" value="1" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									2 <input type="radio" name="p11" id="2" value="2" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									3 <input type="radio" name="p11" id="3" value="3" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									4 <input type="radio" name="p11" id="4" value="4" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									5 <input type="radio" name="p11" id="5" value="5" required onclick="actualizarProgreso()"/>
								</td>
							</tr>
							<tr class="odd" id="row_0">
								<td>12. Prefiero que alguien me diga cómo tengo que hacer las cosas que leer las instrucciones.</td>
								<td>
									1 <input type="radio" name="p12" id="1" value="1" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									2 <input type="radio" name="p12" id="2" value="2" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									3 <input type="radio" name="p12" id="3" value="3" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									4 <input type="radio" name="p12" id="4" value="4" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									5 <input type="radio" name="p12" id="5" value="5" required onclick="actualizarProgreso()"/>
								</td>
							</tr>
							<tr class="odd" id="row_0">
								<td>13. Prefiero escuchar una conferencia o una grabación a leer un libro.</td>
								<td>
									1 <input type="radio" name="p13" id="1" value="1" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									2 <input type="radio" name="p13" id="2" value="2" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									3 <input type="radio" name="p13" id="3" value="3" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									4 <input type="radio" name="p13" id="4" value="4" required onclick="actualizarProgreso()"/>
									</td>
								<td>
									5 <input type="radio" name="p13" id="5" value="5" required onclick="actualizarProgreso()"/>
								</td>
							</tr>
							<tr class="odd" id="row_0">
								<td>14. Cuando no puedo pensar en una palabra específica, uso mis manos y llamo al objeto "coso".</td>
								<td>
									1 <input type="radio" name="p14" id="1" value="1" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									2 <input type="radio" name="p14" id="2" value="2" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									3 <input type="radio" name="p14" id="3" value="3" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									4 <input type="radio" name="p14" id="4" value="4" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									5 <input type="radio" name="p14" id="5" value="5" required onclick="actualizarProgreso()"/>
								</td>
							</tr>
							<tr class="odd" id="row_0">
								<td>15. Puedo seguir fácilmente a una persona que está hablando aunque mi cabeza esté hacia abajo o me encuentre mirando por una ventana.</td>
								<td>
									1 <input type="radio" name="p15" id="1" value="1" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									2 <input type="radio" name="p15" id="2" value="2" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									3 <input type="radio" name="p15" id="3" value="3" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									4 <input type="radio" name="p15" id="4" value="4" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									5 <input type="radio" name="p15" id="5" value="5" required onclick="actualizarProgreso()"/>
								</td>
							</tr>
							<tr class="odd" id="row_0">
								<td>16. Es más fácil para mí hacer un trabajo en un lugar tranquilo</td>
								<td>
									1 <input type="radio" name="p16" id="1" value="1" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									2 <input type="radio" name="p16" id="2" value="2" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									3 <input type="radio" name="p16" id="3" value="3" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									4 <input type="radio" name="p16" id="4" value="4" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									5 <input type="radio" name="p16" id="5" value="5" required onclick="actualizarProgreso()"/>
								</td>
							</tr>
							<tr class="odd" id="row_0">
								<td>17. Me resulta fácil entender mapas, tablas y gráficos.</td>
								<td>
									1 <input type="radio" name="p17" id="1" value="1" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									2 <input type="radio" name="p17" id="2" value="2" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									3 <input type="radio" name="p17" id="3" value="3" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									4 <input type="radio" name="p17" id="4" value="4" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									5 <input type="radio" name="p17" id="5" value="5" required onclick="actualizarProgreso()"/>
								</td>
							</tr>	
							<tr class="odd" id="row_0">
								<td>18. Cuando comienzo un artículo o un libro, prefiero espiar la última página.</td>
								<td>
									1 <input type="radio" name="p18" id="1" value="1" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									2 <input type="radio" name="p18" id="2" value="2" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									3 <input type="radio" name="p18" id="3" value="3" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									4 <input type="radio" name="p18" id="4" value="4" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									5 <input type="radio" name="p18" id="5" value="5" required onclick="actualizarProgreso()"/>
								</td>
							</tr>
							<tr class="odd" id="row_0">
								<td>19. Recuerdo mejor lo que la gente dice que su aspecto.</td>
								<td>
									1 <input type="radio" name="p19" id="1" value="1" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									2 <input type="radio" name="p19" id="2" value="2" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									3 <input type="radio" name="p19" id="3" value="3" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									4 <input type="radio" name="p19" id="4" value="4" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									5 <input type="radio" name="p19" id="5" value="5" required onclick="actualizarProgreso()"/>
								</td>
							</tr>
							<tr class="odd" id="row_0">
								<td>20. Recuerdo mejor si estudio en voz alta con alguien.</td>
								<td>
									1 <input type="radio" name="p20" id="1" value="1" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									2 <input type="radio" name="p20" id="2" value="2" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									3 <input type="radio" name="p20" id="3" value="3" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									4 <input type="radio" name="p20" id="4" value="4" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									5 <input type="radio" name="p20" id="5" value="5" required onclick="actualizarProgreso()"/>
								</td>
							</tr>
							<tr class="odd" id="row_0">
								<td>21. Tomo notas, pero nunca vuelvo a releerlas.</td>
								<td>
									1 <input type="radio" name="p21" id="1" value="1" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									2 <input type="radio" name="p21" id="2" value="2" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									3 <input type="radio" name="p21" id="3" value="3" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									4 <input type="radio" name="p21" id="4" value="4" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									5 <input type="radio" name="p21" id="5" value="5" required onclick="actualizarProgreso()"/>
								</td>
							</tr>
							<tr class="odd" id="row_0">
								<td>22. Cuando estoy concentrado leyendo o escribiendo, la radio me molesta.</td>
								<td>
									1 <input type="radio" name="p22" id="1" value="1" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									2 <input type="radio" name="p22" id="2" value="2" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									3 <input type="radio" name="p22" id="3" value="3" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									4 <input type="radio" name="p22" id="4" value="4" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									5 <input type="radio" name="p22" id="5" value="5" required onclick="actualizarProgreso()"/>
								</td>
							</tr>
							<tr class="odd" id="row_0">
								<td>23. Me resulta difícil crear imágenes en mi cabeza. </td>
								<td>
									1 <input type="radio" name="p23" id="1" value="1" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									2 <input type="radio" name="p23" id="2" value="2" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									3 <input type="radio" name="p23" id="3" value="3" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									4 <input type="radio" name="p23" id="4" value="4" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									5 <input type="radio" name="p23" id="5" value="5" required onclick="actualizarProgreso()"/>
								</td>
							</tr>
							<tr class="odd" id="row_0">
								<td>24. Me resulta útil decir en voz alta las tareas que tengo para hacer.</td>
								<td>
									1 <input type="radio" name="p24" id="1" value="1" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									2 <input type="radio" name="p24" id="2" value="2" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									3 <input type="radio" name="p24" id="3" value="3" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									4 <input type="radio" name="p24" id="4" value="4" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									5 <input type="radio" name="p24" id="5" value="5" required onclick="actualizarProgreso()"/>
								</td>
							</tr>
							<tr class="odd" id="row_0">
								<td>25. Mi cuaderno y mi escritorio pueden verse un desastre, pero sé exactamente dónde está cada cosa.</td>
								<td>
									1 <input type="radio" name="p25" id="1" value="1" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									2 <input type="radio" name="p25" id="2" value="2" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									3 <input type="radio" name="p25" id="3" value="3" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									4 <input type="radio" name="p25" id="4" value="4" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									5 <input type="radio" name="p25" id="5" value="5" required onclick="actualizarProgreso()"/>
								</td>
							</tr>
							<tr class="odd" id="row_0">
								<td>26. Cuando estoy en un examen, puedo "ver" la página en el libro de textos y la respuesta.</td>
								<td>
									1 <input type="radio" name="p26" id="1" value="1" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									2 <input type="radio" name="p26" id="2" value="2" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									3 <input type="radio" name="p26" id="3" value="3" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									4 <input type="radio" name="p26" id="4" value="4" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									5 <input type="radio" name="p26" id="5" value="5" required onclick="actualizarProgreso()"/>
								</td>
							</tr>
							<tr class="odd" id="row_0">
								<td>27. No puedo recordar una broma lo suficiente para contarla luego.</td>
								<td>
									1 <input type="radio" name="p27" id="1" value="1" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									2 <input type="radio" name="p27" id="2" value="2" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									3 <input type="radio" name="p27" id="3" value="3" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									4 <input type="radio" name="p27" id="4" value="4" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									5 <input type="radio" name="p27" id="5" value="5" required onclick="actualizarProgreso()"/>
								</td>
							</tr>
							<tr class="odd" id="row_0">
								<td>28. Al aprender algo nuevo, prefiero escuchar la información, luego leer y luego hacerlo.</td>
								<td>
									1 <input type="radio" name="p28" id="1" value="1" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									2 <input type="radio" name="p28" id="2" value="2" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									3 <input type="radio" name="p28" id="3" value="3" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									4 <input type="radio" name="p28" id="4" value="4" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									5 <input type="radio" name="p28" id="5" value="5" required onclick="actualizarProgreso()"/>
								</td>
							</tr>
							<tr class="odd" id="row_0">
								<td>29. Me gusta completar una tarea antes de comenzar otra.</td>
								<td>
									1 <input type="radio" name="p29" id="1" value="1" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									2 <input type="radio" name="p29" id="2" value="2" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									3 <input type="radio" name="p29" id="3" value="3" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									4 <input type="radio" name="p29" id="4" value="4" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									5 <input type="radio" name="p29" id="5" value="5" required onclick="actualizarProgreso()"/>
								</td>
							</tr>
							<tr class="odd" id="row_0">
								<td>30. Uso mis dedos para contar y muevo los labios cuando leo.</td>
								<td>
									1 <input type="radio" name="p30" id="1" value="1" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									2 <input type="radio" name="p30" id="2" value="2" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									3 <input type="radio" name="p30" id="3" value="3" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									4 <input type="radio" name="p30" id="4" value="4" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									5 <input type="radio" name="p30" id="5" value="5" required onclick="actualizarProgreso()"/>
								</td>
							</tr>
							<tr class="odd" id="row_0">
								<td>31. No me gusta releer mi trabajo.</td>
								<td>
									1 <input type="radio" name="p31" id="1" value="1" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									2 <input type="radio" name="p31" id="2" value="2" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									3 <input type="radio" name="p31" id="3" value="3" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									4 <input type="radio" name="p31" id="4" value="4" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									5 <input type="radio" name="p31" id="5" value="5" required onclick="actualizarProgreso()"/>
								</td>
							</tr>
							<tr class="odd" id="row_0">
								<td>32. Cuando estoy tratando de recordar algo nuevo, me ayuda formarme una imagen mental para lograrlo.</td>
								<td>
									1 <input type="radio" name="p32" id="1" value="1" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									2 <input type="radio" name="p32" id="2" value="2" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									3 <input type="radio" name="p32" id="3" value="3" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									4 <input type="radio" name="p32" id="4" value="4" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									5 <input type="radio" name="p32" id="5" value="5" required onclick="actualizarProgreso()"/>
								</td>
							</tr>
							<tr class="odd" id="row_0">
								<td>33. Para obtener una nota extra, prefiero grabar un informe a escribirlo.</td>
								<td>
									1 <input type="radio" name="p33" id="1" value="1" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									2 <input type="radio" name="p33" id="2" value="2" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									3 <input type="radio" name="p33" id="3" value="3" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									4 <input type="radio" name="p33" id="4" value="4" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									5 <input type="radio" name="p33" id="5" value="5" required onclick="actualizarProgreso()"/>
								</td>
							</tr>
							<tr class="odd" id="row_0">
								<td>34. Fantaseo en clase.</td>
								<td>
									1 <input type="radio" name="p34" id="1" value="1" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									2 <input type="radio" name="p34" id="2" value="2" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									3 <input type="radio" name="p34" id="3" value="3" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									4 <input type="radio" name="p34" id="4" value="4" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									5 <input type="radio" name="p34" id="5" value="5" required onclick="actualizarProgreso()"/>
								</td>
							</tr>
							<tr class="odd" id="row_0">
								<td>35. Para obtener una calificación extra, prefiero crear un proyecto a escribir un informe.</td>
								<td>
									1 <input type="radio" name="p35" id="1" value="1" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									2 <input type="radio" name="p35" id="2" value="2" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									3 <input type="radio" name="p35" id="3" value="3" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									4 <input type="radio" name="p35" id="4" value="4" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									5 <input type="radio" name="p35" id="5" value="5" required onclick="actualizarProgreso()"/>
								</td>
							</tr>
							<tr class="odd" id="row_0">
								<td>36. Cuando tengo una gran idea, debo escribirla inmediatamente, o la olvido con facilidad.</td>
								<td>
									1 <input type="radio" name="p36" id="1" value="1" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									2 <input type="radio" name="p36" id="2" value="2" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									3 <input type="radio" name="p36" id="3" value="3" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									4 <input type="radio" name="p36" id="4" value="4" required onclick="actualizarProgreso()"/>
								</td>
								<td>
									5 <input type="radio" name="p36" id="5" value="5" required onclick="actualizarProgreso()"/>
								</td>
							</tr>				
						</tbody>
					</table>
						<div class="col-lg-2" style="margin: 0 auto; padding: -12px;">
							<input type="submit" name="submit" class="btn btn-success" value="Guardar">
						</div>
					</div>
				</form>
			</div>
		</div><br>
		<!-- Fin del Formulario -->
		<!-- <?php
			// include("registrar.php");
		?> -->
		<script>
		function actualizarProgreso() {
			var preguntasRespondidas = document.querySelectorAll('input[type="radio"]:checked').length;
			var progressBar = document.getElementById('progress-bar');
		    var porcentajeCompletado = (preguntasRespondidas / 36) * 100;
			progressBar.style.width = porcentajeCompletado + "%";
			progressBar.innerHTML = "Faltan " + (36 - preguntasRespondidas) + " oraciones";
		}
		</script>
	</body>
</html>