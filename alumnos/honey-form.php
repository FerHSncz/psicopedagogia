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
		<title>Test 3 - Canal de Aprendizaje de Preferencia</title>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
		<!-- Estilos CSS locales -->
		<link rel="stylesheet" href="../css/estilos.css">
		<link rel="stylesheet" href="../css/centrar.css">		
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
			<form id="formulario" action="accion-test3.php" method="POST" autocomplete="off">
				<div class=""> <!-- row <input type="submit" value="Siguiente" name="registro">-->
					<style> table tr:hover{ background-color: #bbd6ef !important; } </style>
					<table width="100%" name="aprendizaje" class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<center><b><legend><strong>Cuestionario HONEY-ALONSO de ESTILOS DE APRENDIZAJE</strong></legend></b></center>
								<center><b><h5><strong>Instrucciones para responder al cuestionario:</strong></h5></b></center>
								<center><p> Si estás más de acuerdo que en desacuerdo con la sentencia pon un <b>signo más (+), </b></p>
								<p>	Si, por el contrario, estás más en desacuerdo que de acuerdo, pon un <b>signo menos (-).</b></p></center>
							</tr>
							<div class="progress">
								<div id="progress-bar" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="36" style="width: 0%"></div>
							</div><br>
						</thead>
						<tr class="odd" id="row_0">
							<td>1. Tengo fama de decir lo que pienso claramente y sin rodeos.</td>
							<td>
								+ <input type="radio" name="p1" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p1" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>2. Estoy seguro/a de lo que es bueno y lo que es malo, lo que está bien y lo </td>
							<td>
								+ <input type="radio" name="p2" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p2" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>3. Muchas veces actúo sin mirar las consecuencias.</td>
							<td>
								+ <input type="radio" name="p3" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p3" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>4. Normalmente trato de resolver los problemas metódicamente y paso a paso.</td>
							<td>
								+ <input type="radio" name="p4" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p4" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>5. Creo que los formalismos coartan y limitan la actuación libre de las personas.</td>
							<td>
								+ <input type="radio" name="p5" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p5" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>6. Me interesa saber cuáles son los sistemas de valores de los demás y con qué criterios actúan.</td>
							<td>
								+ <input type="radio" name="p6" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p6" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>7. Pienso que el actuar intuitivamente puede ser siempre tan válido como actuar reflexivamente.</td>
							<td>
								+ <input type="radio" name="p7" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p7" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>8. Creo que lo más importante es que las cosas funcionen.</td>
							<td>
								+ <input type="radio" name="p8" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p8" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>9. Procuro estar al tanto de lo que ocurre aquí y ahora.</td>
							<td>
								+ <input type="radio" name="p9" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p9" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>10. Disfruto cuando tengo tiempo para preparar mi trabajo y realizarlo a conciencia </td>
							<td>
								+ <input type="radio" name="p10" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p10" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>11. Estoy a gusto siguiendo un orden en las comidas, en el estudio, haciendo ejercicio regularmente.</td>
							<td>
								+ <input type="radio" name="p11" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p11" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>12. Cuando escucho una nueva idea enseguida comienzo a pensar cómo ponerla en práctica.</td>
							<td>
								+ <input type="radio" name="p12" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p12" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>13. Prefiero las ideas originales y novedosas aunque no sean prácticas.</td>
							<td>
								+ <input type="radio" name="p13" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p13" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>14. Admito y me ajusto a las normas sólo si me sirven para lograr mis objetivos.</td>
							<td>
								+ <input type="radio" name="p14" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p14" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>15. Normalmente encajo bien con personas reflexivas, y me cuesta sintonizar con personas demasiado espontáneas, imprevisibles.</td>
							<td>
								+ <input type="radio" name="p15" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p15" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>16. Escucho con más frecuencia que hablo.</td>
							<td>
								+ <input type="radio" name="p16" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p16" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>17. Prefiero las cosas estructuradas a las desordenadas.</td>
							<td>
								+ <input type="radio" name="p17" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p17" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>18. Cuando poseo cualquier información, trato de interpretarla bien antes de manifestar alguna conclusión.</td>
							<td>
								+ <input type="radio" name="p18" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p18" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>19. Antes de hacer algo estudio con cuidado sus ventajas e inconvenientes.</td>
							<td>
								+ <input type="radio" name="p19" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p19" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>20. Me entusiasmo con el reto de hacer algo nuevo y diferente.</td>
							<td>
								+ <input type="radio" name="p20" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p20" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>21. Casi siempre procuro ser coherente con mis criterios y sistemas de valores. Tengo principios y los sigo.</td>
							<td>
								+ <input type="radio" name="p21" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p21" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>22. Cuando hay una discusión no me gusta ir con rodeos.</td>
							<td>
								+ <input type="radio" name="p22" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p22" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>23. Me disgusta implicarme afectivamente en el ambiente de la escuela. Prefiero mantener relaciones distantes.</td>
							<td>
								+ <input type="radio" name="p23" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p23" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>24. Me gustan más las personas realistas y concretas que las teóricas.</td>
							<td>
								+ <input type="radio" name="p24" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p24" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>25. Me cuesta ser creativo/a, romper estructuras.</td>
							<td>
								+ <input type="radio" name="p25" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p25" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>26. Me siento a gusto con personas espontáneas y divertidas.</td>
							<td>
								+ <input type="radio" name="p26" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p26" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>27. La mayoría de las veces expreso abiertamente cómo me siento.</td>
							<td>
								+ <input type="radio" name="p27" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p27" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>28. Me gusta analizar y dar vueltas a las cosas.</td>
							<td>
								+ <input type="radio" name="p28" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p28" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>29. Me molesta que la gente no se tome en serio las cosas.</td>
							<td>
								+ <input type="radio" name="p29" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p29" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>30. Me atrae experimentar y practicar las últimas técnicas y novedades.</td>
							<td>
								+ <input type="radio" name="p30" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p30" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>31. Soy cauteloso/a a la hora de sacar conclusiones.</td>
							<td>
								+ <input type="radio" name="p31" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p31" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>32. Prefiero contar con el mayor número de fuentes de información. Cuantos más datos reúna para reflexionar, mejor.</td>
							<td>
								+ <input type="radio" name="p32" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p32" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>33. Tiendo a ser perfeccionista.</td>
							<td>
								+ <input type="radio" name="p33" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p33" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>34. Prefiero oír las opiniones de los demás antes de exponer la mía.</td>
							<td>
								+ <input type="radio" name="p34" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p34" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>35. Me gusta afrontar la vida espontáneamente y no tener que planificar todo previamente.</td>
							<td>
								+ <input type="radio" name="p35" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p35" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>36. En las discusiones me gusta observar cómo actúan los demás participantes.</td>
							<td>
								+ <input type="radio" name="p36" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p36" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>37. Me siento incómodo/a con las personas calladas y demasiado analíticas.</td>
							<td>
								+ <input type="radio" name="p37" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p37" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>38. Juzgo con frecuencia las ideas de los demás por su valor práctico.</td>
							<td>
								+ <input type="radio" name="p38" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p38" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>39. Me agobio si me obligan a acelerar mucho el trabajo para cumplir un plazo.</td>
							<td>
								+ <input type="radio" name="p39" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p39" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>40. En las reuniones apoyo las ideas prácticas y realistas.</td>
							<td>
								+ <input type="radio" name="p40" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p40" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>41. Es mejor gozar del momento presente que deleitarse pensando en el pasado o en el futuro.</td>
							<td>
								+ <input type="radio" name="p41" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p41" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>42. Me molestan las personas que siempre desean apresurar las cosas.</td>
							<td>
								+ <input type="radio" name="p42" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p42" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>43. Aporto ideas nuevas y espontáneas en los grupos de discusión.</td>
							<td>
								+ <input type="radio" name="p43" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p43" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>44. Pienso que son más consistentes las decisiones fundamentadas en un minucioso análisis que las basadas en la intuición.</td>
							<td>
								+ <input type="radio" name="p44" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p44" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>45. Detecto frecuentemente la inconsistencia y puntos débiles en las argumentaciones de los demás.</td>
							<td>
								+ <input type="radio" name="p45" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p45" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>46. Creo que es preciso saltarse las normas muchas más veces que cumplirlas.</td>
							<td>
								+ <input type="radio" name="p46" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p46" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>47. A menudo caigo en la cuenta de otras formas mejores y más prácticas de hacer las cosas.</td>
							<td>
								+ <input type="radio" name="p47" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p47" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>48. En conjunto hablo más que escucho.</td>
							<td>
								+ <input type="radio" name="p48" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p48" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>49. Prefiero distanciarme de los hechos y observarlos desde otras perspectivas.</td>
							<td>
								+ <input type="radio" name="p49" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p49" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>50. Estoy convencido/a que debe imponerse la lógica y el razonamiento.</td>
							<td>
								+ <input type="radio" name="p50" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p50" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>51. Me gusta buscar nuevas experiencias.</td>
							<td>
								+ <input type="radio" name="p51" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p51" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>52. Me gusta experimentar y aplicar las cosas.</td>
							<td>
								+ <input type="radio" name="p52" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p52" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>53. Pienso que debemos llegar pronto al grano, al meollo de los temas.</td>
							<td>
								+ <input type="radio" name="p53" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p53" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>54. Siempre trato de conseguir conclusiones e ideas claras.</td>
							<td>
								+ <input type="radio" name="p54" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p54" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>55. Prefiero discutir cuestiones concretas y no perder el tiempo con pláticas superficiales.</td>
							<td>
								+ <input type="radio" name="p55" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p55" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>56. Me impaciento cuando me dan explicaciones irrelevantes e incoherentes.</td>
							<td>
								+ <input type="radio" name="p56" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p56" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>57. Compruebo antes si las cosas funcionan realmente.</td>
							<td>
								+ <input type="radio" name="p57" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p57" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>58. Hago varios borradores antes de la redacción definitiva de un trabajo.</td>
							<td>
								+ <input type="radio" name="p58" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p58" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>59. Soy consciente de que en las discusiones ayudo a mantener a los demás centrados en el tema, evitando divagaciones.</td>
							<td>
								+ <input type="radio" name="p59" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p59" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>60. Observo que, con frecuencia, soy uno/a de los/as más objetivos/as y desapasionados/as en las discusiones.</td>
							<td>
								+ <input type="radio" name="p60" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p60" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>61. Cuando algo va mal, le quito importancia y trato de hacerlo mejor.</td>
							<td>
								+ <input type="radio" name="p61" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p61" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>62. Rechazo ideas originales y espontáneas si no las veo prácticas.</td>
							<td>
								+ <input type="radio" name="p62" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p62" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>63. Me gusta sopesar diversas alternativas antes de tomar una decisión.</td>
							<td>
								+ <input type="radio" name="p63" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p63" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>64. Con frecuencia miro hacia delante para prever el futuro.</td>
							<td>
								+ <input type="radio" name="p64" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p64" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>65. En los debates y discusiones prefiero desempeñar un papel secundario antes que ser el/la líder o el/la que más participa.</td>
							<td>
								+ <input type="radio" name="p65" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p65" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>66. Me molestan las personas que no actúan con lógica.</td>
							<td>
								+ <input type="radio" name="p66" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p66" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>67. Me resulta incómodo tener que planificar y prever las cosas.</td>
							<td>
								+ <input type="radio" name="p67" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p67" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>68. Creo que el fin justifica los medios en muchos casos.</td>
							<td>
								+ <input type="radio" name="p68" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p68" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>69. Suelo reflexionar sobre los asuntos y problemas.</td>
							<td>
								+ <input type="radio" name="p69" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p69" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>70. El trabajar a conciencia me llena de satisfacción y orgullo.</td>
							<td>
								+ <input type="radio" name="p70" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p70" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>71. Ante los acontecimientos trato de descubrir los principios y teorías en que se basan.</td>
							<td>
								+ <input type="radio" name="p71" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p71" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>72. Con tal de conseguir el objetivo que pretendo soy capaz de herir sentimientos ajenos.</td>
							<td>
								+ <input type="radio" name="p72" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p72" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>73. No me importa hacer todo lo necesario para que sea efectivo mi trabajo.</td>
							<td>
								+ <input type="radio" name="p73" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p73" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
						<td>74. Con frecuencia soy una de las personas que más anima las fiestas.</td>
							<td>
								+ <input type="radio" name="p74" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p74" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>75. Me aburro enseguida con el trabajo metódico y minucioso.</td>
							<td>
								+ <input type="radio" name="p75" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p75" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>76. La gente con frecuencia cree que soy poco sensible a sus sentimientos.</td>
							<td>
								+ <input type="radio" name="p76" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p76" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>77. Suelo dejarme llevar por mis intuiciones.</td>
							<td>
								+ <input type="radio" name="p77" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p77" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>78. Si trabajo en grupo procuro que se siga un método y un orden.</td>
							<td>
								+ <input type="radio" name="p78" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p78" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>79. Con frecuencia me interesa averiguar lo que piensa la gente.</td>
							<td>
								+ <input type="radio" name="p79" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p79" id="2" value="0" required onclick="actualizarProgreso()"/>
							</td>
						</tr>
						<tr class="odd" id="row_0">
							<td>80. Esquivo los temas subjetivos, ambiguos y poco claros.</td>
							<td>
								+ <input type="radio" name="p80" id="1" value="1" required onclick="actualizarProgreso()"/>
							</td>
							<td>
								- <input type="radio" name="p80" id="2" value="0" required onclick="actualizarProgreso()"/>
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
	</div>

		<?php
			// include("registrar.php");
		?>

		<script>
			function actualizarProgreso() {
				var preguntasRespondidas = document.querySelectorAll('input[type="radio"]:checked').length;
				var progressBar = document.getElementById('progress-bar');
				var porcentajeCompletado = (preguntasRespondidas / 80) * 100;
				progressBar.style.width = porcentajeCompletado + "%";
				progressBar.innerHTML = "Faltan " + (80 - preguntasRespondidas) + " oraciones";
			}
		</script>
	</body>
</html>