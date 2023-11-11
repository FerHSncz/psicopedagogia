<?php 
	include '../php/config.php';
	include '../php/sesion.php';
	include '../php/env-test2.php';
	include '../hf/a-header.php';
?>
    <div class="container">
        <img style=" margin:10px auto; display:block;" src="../img/UTCGG.png" width="55" height="50" align="">
    </div>
    <h2 align="center" style="padding: 15px;"><strong>Test - Modelo PNL</strong></h2>
    <div class="container mt-2">
        <div>
            <form method="POST">
                <div class="">
                    <div class="col-lg-6" style="margin: 0 auto;">
                        <P>1. ¿Cuál de las siguientes actividades disfrutas más?</P>
                        <div class="form-group">
                            <select name="p1" class="form-control" required>
                                <option selected disabled value="" class="form-control mt-2">Selecciona una opción</option>
                                <option value="1">a) Escuchar música</option>
                                <option value="2">b) Ver películas</option>
                                <option value="3">c) Bailar con buena música</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6" style="margin: 0 auto;">
                        <p>2. ¿Qué programa de televisión prefieres?</p>
                        <div class="form-group">
                            <select name="p2" class="form-control mt-4" required>
                                <option selected disabled value="" class="form-control mt-4">Selecciona una opción</option>
                                <option value="1">a) Reportajes de descubrimientos y lugares</option>
                                <option value="2">b) Cómico y de entretenimiento</option>
                                <option value="3">c) Noticias del mundo</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6" style="margin: 0 auto;">
                        <P>3. Cuando conversas con otra persona, tú:</P>
                        <div class="form-group">
                            <select name="p3" class="form-control mt-4" required>
                                <option selected disabled value="" class="form-control mt-4">Selecciona una opción</option>
                                <option value="1">a) La escuchas atentamente</option>
                                <option value="2">b) La observas</option>
                                <option value="3">c) Tiendes a tocarla</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6" style="margin: 0 auto;">
                        <P>4. Si pudieras adquirir uno de los siguientes artículos, ¿cuál elegirías?</P>
                        <div class="form-group">
                            <select name="p4" class="form-control mt-4" required>
                                <option selected disabled value="" class="form-control mt-4">Selecciona una opción</option>
                                <option value="1">a) Un jacuzzi</option>
                                <option value="2">b) Un estéreo</option>
                                <option value="3">c) Un televisor</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6" style="margin: 0 auto;">
                        <P>5. ¿Qué prefieres hacer un sábado por la tarde?</P>
                        <div class="form-group">
                            <select name="p5" class="form-control mt-4" required>
                                <option selected disabled value="" class="form-control mt-4">Selecciona una opción</option>
                                <option value="1">a) Quedarte en casa</option>
                                <option value="2">b) Ir a un concierto</option>
                                <option value="3">c) Ir al cine</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6" style="margin: 0 auto;">
                        <P>6. ¿Qué tipo de exámenes se te facilitan más?</P>
                        <div class="form-group">
                            <select name="p6" class="form-control mt-2" required>
                                <option selected disabled value="" class="form-control mt-2">Selecciona una opción</option>
                                <option value="1">a) Examen oral</option>
                                <option value="2">b) Examen escrito</option>
                                <option value="3">c) Examen de opción múltiple</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6" style="margin: 0 auto;">
                        <p>7. ¿Cómo te orientas más fácilmente?</p>
                        <div class="form-group">
                            <select name="p7" class="form-control mt-4" required>
                                <option selected disabled value="" class="form-control mt-4">Selecciona una opción</option>
                                <option value="1">a) Mediante el uso de un mapa</option>
                                <option value="2">b) Pidiendo indicaciones</option>
                                <option value="3">c) A través de la intuición</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6" style="margin: 0 auto;">
                        <P>8. ¿En qué prefieres ocupar tu tiempo en un lugar de descanso?</P>
                        <div class="form-group">
                            <select name="p8" class="form-control mt-4" required>
                                <option selected disabled value="" class="form-control mt-4">Selecciona una opción</option>
                                <option value="1">a) Pensar</option>
                                <option value="2">b) Caminar por los alrededores</option>
                                <option value="3">c) Descansar</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6" style="margin: 0 auto;">
                        <P>9. ¿Qué te halaga más?</P>
                        <div class="form-group">
                            <select name="p9" class="form-control mt-4" required>
                                <option selected disabled value="" class="form-control mt-4">Selecciona una opción</option>
                                <option value="1">a) Que te digan que tienes buen aspecto</option>
                                <option value="2">b) Que te digan que tienes un trato muy agradable</option>
                                <option value="3">c) Que te digan que tienes una conversación interesante</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6" style="margin: 0 auto;">
                        <P>10. ¿Cuál de estos ambientes te atrae más?</P>
                        <div class="form-group">
                            <select name="p10" class="form-control mt-4" required>
                                <option selected disabled value="" class="form-control mt-4">Selecciona una opción</option>
                                <option value="1">a) Uno en el que se sienta un clima agradable</option>
                                <option value="2">b) Uno en el que se escuchen las olas del mar</option>
                                <option value="3">c) Uno con una hermosa vista al océano</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6" style="margin: 0 auto;">
                        <P>11. ¿De qué manera se te facilita aprender algo?</P>
                        <div class="form-group">
                            <select name="p11" class="form-control mt-2" required>
                                <option selected disabled value="" class="form-control mt-2">Selecciona una opción</option>
                                <option value="1">a) Repitiendo en voz alta</option>
                                <option value="2">b) Escribiéndolo varias veces</option>
                                <option value="3">c) Relacionándolo con algo divertido</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6" style="margin: 0 auto;">
                        <p>12. ¿A qué evento preferirías asistir?</p>
                        <div class="form-group">
                            <select name="p12" class="form-control mt-4" required>
                                <option selected disabled value="" class="form-control mt-4">Selecciona una opción</option>
                                <option value="1">a) A una reunión social</option>
                                <option value="2">b) A una exposición de arte</option>
                                <option value="3">c) A una conferencia</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6" style="margin: 0 auto;">
                        <P>13. ¿De qué manera te formas una opinión de otras personas?</P>
                        <div class="form-group">
                            <select name="p13" class="form-control mt-4" required>
                                <option selected disabled value="" class="form-control mt-4">Selecciona una opción</option>
                                <option value="1">a) Por la sinceridad en su voz</option>
                                <option value="2">b) Por la forma de estrecharte la mano</option>
                                <option value="3">c) Por su aspecto</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6" style="margin: 0 auto;">
                        <P>14. ¿Cómo te consideras?</P>
                        <div class="form-group">
                            <select name="p14" class="form-control mt-4" required>
                                <option selected disabled value="" class="form-control mt-4">Selecciona una opción</option>
                                <option value="1">a) Atlético</option>
                                <option value="2">b) Intelectual</option>
                                <option value="3">c) Sociable</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6" style="margin: 0 auto;">
                        <P>15. ¿Qué tipo de películas te gustan más?</P>
                        <div class="form-group">
                            <select name="p15" class="form-control mt-4" required>
                                <option selected disabled value="" class="form-control mt-4">Selecciona una opción</option>
                                <option value="1">a) Clásicas</option>
                                <option value="2">b) De acción</option>
                                <option value="3">c) De amor</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6" style="margin: 0 auto;">
                        <P>16. ¿Cómo prefieres mantenerte en contacto con otra persona?</P>
                        <div class="form-group">
                            <select name="p16" class="form-control mt-2" required>
                                <option selected disabled value="" class="form-control mt-2">Selecciona una opción</option>
                                <option value="1">a) Por correo electrónico</option>
                                <option value="2">b) Tomando un café juntos</option>
                                <option value="3">c) Por teléfono</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6" style="margin: 0 auto;">
                        <p>17. ¿Cuál de las siguientes frases se identifican más contigo?</p>
                        <div class="form-group">
                            <select name="p17" class="form-control mt-4" required>
                                <option selected disabled value="" class="form-control mt-4">Selecciona una opción</option>
                                <option value="1">a) Me gusta que mi coche se sienta bien al conducirlo</option>
                                <option value="2">b) Percibo hasta el mas ligero ruido que hace mi coche</option>
                                <option value="3">c) Es importante que mi coche esté limpio por fuera y por dentro</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6" style="margin: 0 auto;">
                        <P>18. ¿Cómo prefieres pasar el tiempo con tu novia o novio?</P>
                        <div class="form-group">
                            <select name="p18" class="form-control mt-4" required>
                                <option selected disabled value="" class="form-control mt-4">Selecciona una opción</option>
                                <option value="1">a) Conversando</option>
                                <option value="2">b) Acariciándose</option>
                                <option value="3">c) Mirando algo juntos</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6" style="margin: 0 auto;">
                        <P>19. Si no encuentras las llaves en una bolsa</P>
                        <div class="form-group">
                            <select name="p19" class="form-control mt-4" required>
                                <option selected disabled value="" class="form-control mt-4">Selecciona una opción</option>
                                <option value="1">a) La buscas mirando</option>
                                <option value="2">b) Sacudes la bolsa para oír el ruido</option>
                                <option value="3">c) Buscas al tacto</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6" style="margin: 0 auto;">
                        <P>20. Cuando tratas de recordar algo, ¿cómo lo haces?</P>
                        <div class="form-group">
                            <select name="p20" class="form-control mt-4" required>
                                <option selected disabled value="" class="form-control mt-4">Selecciona una opción</option>
                                <option value="1">a) A través de imágenes</option>
                                <option value="2">b) A través de emociones</option>
                                <option value="3">c) A través de sonidos</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6" style="margin: 0 auto;">
                        <P>21. Si tuvieras dinero, ¿qué harías?</P>
                        <div class="form-group">
                            <select name="p21" class="form-control mt-2" required>
                                <option selected disabled value="" class="form-control mt-2">Selecciona una opción</option>
                                <option value="1">a) Comprar una casa</option>
                                <option value="2">b) Viajar y conocer el mundo</option>
                                <option value="3">c) Adquirir un estudio de grabación</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6" style="margin: 0 auto;">
                        <p>22. ¿Con qué frase te identificas más?</p>
                        <div class="form-group">
                            <select name="p22" class="form-control mt-4" required>
                                <option selected disabled value="" class="form-control mt-4">Selecciona una opción</option>
                                <option value="1">a) Reconozco a las personas por su voz</option>
                                <option value="2">b) No recuerdo el aspecto de la gente</option>
                                <option value="3">c) Recuerdo el aspecto de alguien, pero no su nombre</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6" style="margin: 0 auto;">
                        <P>23. Si tuvieras que quedarte en una isla desierta, ¿qué
                            preferirías llevar contigo</P>
                        <div class="form-group">
                            <select name="p23" class="form-control mt-4" required>
                                <option selected disabled value="" class="form-control mt-4">Selecciona una opción</option>
                                <option value="1">a) Algunos buenos libros</option>
                                <option value="2">b) Un radio portátil de alta frecuencia</option>
                                <option value="3">c) Golosinas y comida enlatada</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6" style="margin: 0 auto;">
                        <P>24. ¿Cuál de los siguientes entretenimientos prefieres?</P>
                        <div class="form-group">
                            <select name="p24" class="form-control mt-4" required>
                                <option selected disabled value="" class="form-control mt-4">Selecciona una opción</option>
                                <option value="1">a) Tocar un instrumento musical</option>
                                <option value="2">b) Sacar fotografías</option>
                                <option value="3">c) Actividades manuales</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6" style="margin: 0 auto;">
                        <P>25. ¿Cómo es tu forma de vestir?</P>
                        <div class="form-group">
                            <select name="p25" class="form-control mt-4" required>
                                <option selected disabled value="" class="form-control mt-4">Selecciona una opción</option>
                                <option value="1">a) Impecable</option>
                                <option value="2">b) Informal</option>
                                <option value="3">c) Muy informal</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6" style="margin: 0 auto;">
                        <P>26. ¿Qué es lo que más te gusta de una fogata nocturna?</P>
                        <div class="form-group">
                            <select name="p26" class="form-control mt-2" required>
                                <option selected disabled value="" class="form-control mt-2">Selecciona una opción</option>
                                <option value="1">a) El calor del fuego y los bombones asados</option>
                                <option value="2">b) El sonido del fuego quemando la leña</option>
                                <option value="3">c) Mirar el fuego y las estrellas</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6" style="margin: 0 auto;">
                        <p>27. ¿Cómo se te facilita entender algo?</p>
                        <div class="form-group">
                            <select name="p27" class="form-control mt-4" required>
                                <option selected disabled value="" class="form-control mt-4">Selecciona una opción</option>
                                <option value="1">a) Cuando te lo explican verbalmente</option>
                                <option value="2">b) Cuando utilizan medios visuales</option>
                                <option value="3">c) Cuando se realiza a través de alguna actividad</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6" style="margin: 0 auto;">
                        <P>28. ¿Por qué te distingues?</P>
                        <div class="form-group">
                            <select name="p28" class="form-control mt-4" required>
                                <option selected disabled value="" class="form-control mt-4">Selecciona una opción</option>
                                <option value="1">a) Por tener una gran intuición</option>
                                <option value="2">b) Por ser un buen conversador</option>
                                <option value="3">c) Por ser un buen observador</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6" style="margin: 0 auto;">
                        <P>29. ¿Qué es lo que más disfrutas de un amanecer?</P>
                        <div class="form-group">
                            <select name="p29" class="form-control mt-4" required>
                                <option selected disabled value="" class="form-control mt-4">Selecciona una opción</option>
                                <option value="1">a) La emoción de vivir un nuevo día</option>
                                <option value="2">b) Las tonalidades del cielo</option>
                                <option value="3">c) El canto de las aves</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6" style="margin: 0 auto;">
                        <P>30. Si pudieras elegir ¿qué preferirías ser?</P>
                        <div class="form-group">
                            <select name="p30" class="form-control mt-4" required>
                                <option selected disabled value="" class="form-control mt-4">Selecciona una opción</option>
                                <option value="1">a) Un gran médico</option>
                                <option value="2">b) Un gran músico</option>
                                <option value="3">c) Un gran pintor</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6" style="margin: 0 auto;">
                        <P>31. Cuando eliges tu ropa, ¿qué es lo más importante para ti?</P>
                        <div class="form-group">
                            <select name="p31" class="form-control mt-2" required>
                                <option selected disabled value="" class="form-control mt-2">Selecciona una opción</option>
                                <option value="1">a) Que sea adecuada</option>
                                <option value="2">b) Que luzca bien</option>
                                <option value="3">c) Que sea cómoda</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6" style="margin: 0 auto;">
                        <p>32. ¿Qué es lo que más disfrutas de una habitación?</p>
                        <div class="form-group">
                            <select name="p32" class="form-control mt-4" required>
                                <option selected disabled value="" class="form-control mt-4">Selecciona una opción</option>
                                <option value="1">a) Que sea silenciosa</option>
                                <option value="2">b) Que sea confortable</option>
                                <option value="3">c) Que esté limpia y ordenada</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6" style="margin: 0 auto;">
                        <P>33. ¿Qué es más sexy para ti?</P>
                        <div class="form-group">
                            <select name="p33" class="form-control mt-4" required>
                                <option selected disabled value="" class="form-control mt-4">Selecciona una opción</option>
                                <option value="1">a) Una iluminación tenue</option>
                                <option value="2">b) El perfume</option>
                                <option value="3">c) Cierto tipo de música</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6" style="margin: 0 auto;">
                        <P>34. ¿A qué tipo de espectáculo preferirías asistir?</P>
                        <div class="form-group">
                            <select name="p34" class="form-control mt-4" required>
                                <option selected disabled value="" class="form-control mt-4">Selecciona una opción</option>
                                <option value="1">a) A un concierto de música</option>
                                <option value="2">b) A un espectáculo de magia</option>
                                <option value="3">c) A una muestra gastronómica</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6" style="margin: 0 auto;">
                        <P>35. ¿Qué te atrae más de una persona?</P>
                        <div class="form-group">
                            <select name="p35" class="form-control mt-4" required>
                                <option selected disabled value="" class="form-control mt-4">Selecciona una opción</option>
                                <option value="1">a) Su trato y forma de ser</option>
                                <option value="2">b) Su aspecto físico</option>
                                <option value="3">c) Su conversación</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6" style="margin: 0 auto;">
                        <P>36. Cuando vas de compras, ¿en dónde pasas mucho tiempo?</P>
                        <div class="form-group">
                            <select name="p36" class="form-control mt-4" required>
                                <option selected disabled value="" class="form-control mt-4">Selecciona una opción</option>
                                <option value="1">a) En una librería</option>
                                <option value="2">b) En una perfumería</option>
                                <option value="3">c) En una tienda de discos</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6" style="margin: 0 auto;">
                        <p>37. ¿Cuáles tu idea de una noche romántica?</p>
                        <div class="form-group">
                            <select name="p37" class="form-control mt-4" required>
                                <option selected disabled value="" class="form-control mt-4">Selecciona una opción</option>
                                <option value="1">a) A la luz de las velas</option>
                                <option value="2">b) Con música romántica</option>
                                <option value="3">c) Bailando tranquilamente</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6" style="margin: 0 auto;">
                        <P>38. ¿Qué es lo que más disfrutas de viajar?</P>
                        <div class="form-group">
                            <select name="p38" class="form-control mt-4" required>
                                <option selected disabled value="" class="form-control mt-4">Selecciona una opción</option>
                                <option value="1">a) Conocer personas y hacer nuevos amigos</option>
                                <option value="2">b) Conocer lugares nuevos</option>
                                <option value="3">c) Aprender sobre otras costumbres</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6" style="margin: 0 auto;">
                        <P>39. Cuando estás en la ciudad, ¿qué es lo que más hechas de
                            menos del campo?</P>
                        <div class="form-group">
                            <select name="p39" class="form-control mt-4" required>
                                <option selected disabled value="" class="form-control mt-4">Selecciona una opción</option>
                                <option value="1">a) El aire limpio y refrescante</option>
                                <option value="2">b) Los paisajes</option>
                                <option value="3">c) La tranquilidad</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6" style="margin: 0 auto;">
                        <P>40. Si te ofrecieran uno de los siguientes empleos, ¿cuál
                            elegirías</P>
                        <div class="form-group">
                            <select name="p40" class="form-control mt-4" required>
                                <option selected disabled value="" class="form-control mt-4">Selecciona una opción</option>
                                <option value="1">a) Director de una estación de radio</option>
                                <option value="2">b) Director de un club deportivo</option>
                                <option value="3">c) Director de una revista</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="col-lg-2" style="margin: 0 auto; padding: -12px;">
                        <button type="submit" name="registrar" class="btn btn-success"><a href="pnl.php"></a>Finalizar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <br>
<?php
	include '../hf/a-footer.php';
?>