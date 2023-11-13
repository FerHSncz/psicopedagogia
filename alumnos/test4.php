<?php
	include '../php/config.php';
	include '../php/sesion.php';
	include '../php/env-test4.php';
	include '../hf/a-header.php';
?>
		<!-- Inicio de Formulario -->
		<h1 align="center" style="padding: 0px;"><strong></strong></h1>

		<div class="container">
			<img style=" margin:10px auto; display:block;" src="../img/UTCGG.png" width="55" height="50" align="">
		</div>      	
		<div class="container mt-2">
			<form id="formulario" action="../php/env-test4.php" method="POST" autocomplete="off">
				<div class=""> <!-- row <input type="submit" value="Siguiente" name="registro">-->
					<style>
						table tr:hover{
							background-color: #bbd6ef !important;
						}
					</style>		
						<table width="100%" name="aprendizaje" class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<center><b><legend><strong>Test de Diagnóstico de Riesgos Psicosociales</strong></legend></b></center>
									<p>Lea cuidadosamente cada enunciado y piense de qué manera se aplicaría a usted. En la sección ponderación de cada pregunta seleccione la respuesta según el número que mejor describe su reacción. No tiene que dejar enunciados sin contestar; en la sección de Ponderación el valor mínimo es 1 y el valor máximo es 5. </b></p>
								</tr>
								<div class="progress">
									<div id="progress-bar" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="36" style="width: 0%">							    
									</div>
								</div>
								<br>
							</thead>
							<tbody>
								<tr class="odd" id="row_0">
									<td>1. ¿Te resulta difícil mantener la atención, concentración, memoria y entender las instrucciones en los trabajos que realizas?</td>
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
									<td>2.	¿Normalmente tienes pensamientos negativos y recurrentes de que algo malo va a pasar?</td>
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
									<td>3. ¿Te cuesta trabajo hacer amistades?</td>
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
									<td>4. ¿Te cuesta empezar algo y concluirlo?</td>
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
									<td>5. ¿Tienes alteraciones en la lectura y escritura como mala ortografía, cambiar las palabras y/o letras, o agregar/quitar letras en lo que escribes?</td>
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
									<td>6. ¿Sueles padecer algunos de estos síntomas: opresión en el pecho, corazón acelerado, temblor, sudoración, problemas en el estómago?</td>
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
									<td>7. ¿Prefieres mantenerte aislado del resto de tus compañeros?</td>
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
									<td>8. ¿Tienes claridad de tus metas, de lo que quieres cumplir y lograr?</td>
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
									<td>9. ¿Te cuesta trabajo entender las operaciones básicas de matemáticas como sumar, restar, multiplicar y dividir?</td>
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
									<td>10. ¿Sueles padecer algunos de estos síntomas: sensación de vacío, miedo al abandono real o imaginario, dolor emocional intenso, emociones intensas como enojo, tristeza, miedo, autolesiones, conductas de riesgo como: atracones en comida, abuso de alcohol o drogas en exceso, gusto por la velocidad?</td>
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
									<td>11. ¿Prefieres pasar más tiempo a solas y con tus dispositivos electrónicos?</td>
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
									<td>12. ¿Tiendes a pensar en el futuro?</td>
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
									<td>13. ¿Sueles tener movimientos excesivos en pies y manos, y además te cuesta mantenerte en un solo lugar; asimismo de que sueles hablar mucho?</td>
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
									<td>14. ¿Sueles padecer algunos de estos síntomas: sentimientos de tristeza, desesperanza, irritabilidad, cansancio y fatiga, sentimientos de odio y culpa, desmotivación, alteración en sueño y alimentación (comer o dormir de más o menos)?</td>
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
									<td>15. ¿Te pone nervioso o temeroso hablar con las personas?</td>
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
									<td>16. ¿Conoces tus fortalezas y debilidades?</td>
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
									<td>17. ¿Consideras que tienes una rutina establecida para estudiar buenos hábitos de estudio?</td>
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
									<td>18. ¿Has tenido momentos donde te desconoces y sientes que no eres tú, momentos donde escuchas voces, ves sombras o sientes que te persiguen?</td>
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
									<td>19. ¿Te es difícil expresarte de tus emociones como comunicarte verbalmente?</td>
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
									<td>20. ¿Identificas tus gustos, intereses y motivaciones?</td>
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
							</tbody>
						</table>
					<div class="col-lg-2" style="margin: 0 auto; padding: -12px;">
						<input type="submit" name="submit" class="btn btn-success" value="Guardar">
					</div>
				</div>
			</form>
		</div>
		<br>
		<!-- Fin del Formulario -->
		<script src="js/progreso4.js"></script>
<?php
	include '../hf/a-footer.php';
?>