<!DOCTYPE html>
<html lang="es">
<?php require_once 'headers.php'; ?>
<body>
    <?php require_once 'menu.html'; ?>
    <section id="body" class="body">
	<div class="about-me container">
            <div class="section-title">
                <h2><?php echo InterfazGeneral::AUTOR; ?></h2>
                <p>CUENTOS</p>
            </div>
            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    <img src="assets/img/<?php echo $id_obra; ?>.jpg" class="img-fluid" alt="Obra de Leon Spilliaert">
                    Obra de Leon Spilliaert
                </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Ataque de Ansiedad</h3>
            <p class="fst-italic">La Canción Glacial</p>
                <div class="row" align="justify">
                    <p>
                    A menudo abro los ojos con una sensación ludópata, esperando que la fortuna me indique que ese día la ansiedad no me apretará el corazón. Cuando no siento esa bestia en mi pecho sonrío y me levanto de un salto, amando el día tranquilo y la serenidad en mi ser. Pero cuando siento esa opresión helada al despertar, sé que el día será largo e infernal. 
                    </p>
                </div>
            </div>
            <div class="row" align="justify">
                <p><br>
                    La ansiedad, excesivamente futura, empieza como un frío en el interior, que poco a poco acelera mi corazón, presa de un incómodo temor, como cuando de niño no hacía la tarea y el profesor me llamaba. Y de repente el monstruo empieza a aletear a mi alrededor, a batirme las manos y a oscurecer mi entorno, causando que todo mi cuerpo tiemble y que sude cual miserable torturado. 
                    <br>-¡No, no, no!- grito en mi cabeza una y otra vez, aterrado, mientras la piel se me empieza a caer como a un leproso, y los ojos se me desorbitan y se derriten, al mismo tiempo que la garganta se me cierra y los latidos se me aceleran. Acurrucado y con dolor de cabeza, debo parecer un condenado horroroso… pero sin justificación ni motivo, sólo la culpa de no tener justificación o motivo. Esa impotencia e ira de entrar en pánico por nada hace que el pánico se incremente, y ese monstruo ansioso crezca en vez de disminuir al tener el motivo de no encontrar motivo. De esta manera me devora hasta los huesos.
                </p>
                 <p>
                    Y sólo el levantarse de la cama se vuelve un desafío. El caminar con ese miedo horrible hasta el baño es una victoria que sólo yo siento, y que no puedo presumir porque la terrible sociedad me aplastaría como el corcel aplasta el pasto. ¿Cómo decir que logré bañarme y salir a trabajar o a estudiar, mientras ingenieros envían naves a marte o médicos curan enfermedades? ¿Qué clase de logro es ese como para presumir? Aunque la gente de dientes para afuera diga que me entiende, y me mienta a la cara, soy consciente de que esta victoria es sólo mía. 
                </p>
                <p>
                    Turbado bajo esa sensación gris y fría, siento esas uñas en el interior cada minuto y cada segundo durante su ataque, despedazándome como un cazador a su presa, y yo, mirando las miradas indiferentes, sólo puedo callar, aunque tirite, sólo puedo aguantar las náuseas al verme a pedazos, sólo puedo permanecer de pie (y a veces sonreír) al mismo tiempo que busco remedios mágicos, como comer o dormir, engordándome cual puerco solamente para ser el festín del próximo ataque de ansiedad.
                </p>
                <p>
                    Como una pintura a blanco y negro de Picasso, como el Guernica, quedó fraccionado durante esos eternos instantes. Visualizo segundo a segundo mi día, el baño, el desayuno, la reunión con los superiores, el terrible almuerzo donde enmudezco al no poder pedirle a la mesera un plato de comida, los problemas laborales, el inclemente transporte y llegar a una casa que pago y en donde casi no permanezco (y donde no soy feliz). Veo cada uno de los eventos llenos de problemas imaginarios, y de esos problemas pululan más problemas, como una terrible infección. Y tareas sencillas se vuelven odiseas inalcanzables, sin solución, sin esperanza.
                    <br>Entonces pienso: -¿Para qué las hago si igual no las voy a solucionar? ¿Para qué soluciono este problema, creado por mí mismo, si voy a inventarme otro?
                </p>
                <p>
                    Y soy consciente de que son imaginaciones sin justificación lógica; pero en promedio, es la mente mucho más cruel que la realidad. Cuando la cabeza se llena de pensamientos futuros, se vuelve tan pesada que impide continuar el camino. En ese momento, a menudo, me doy cuenta que después de todos estos pensamientos cristalinos, ni siquiera me he levantado de la cama y no he ido al baño… ya está acabando el ataque de ansiedad, ya casi vuelvo de las convulsiones a la realidad.
                </p>
                <p>
                    Entonces pasa el día, y al anochecer me acuesto con ese mismo pensamiento ludópata, esperando si apenas abra los ojos tendré un día colorido o el monstruo de la ansiedad se encubará en mí apenas despierte.
                </p>
            </div>
        </div>
        <br>
        <div class="fb-like" data-href="<?php echo $url; ?>" data-width="" data-layout="" data-action="" data-size="" data-share="true"></div>
	<br></br>
        <a href="javascript:history.back(-1);" title="Ir la página anterior">Volver</a> | <a href="las_dos_terribles_companeras.php#body" title="Las Dos Terribles Compañeras">Leer Las Dos Terribles Compañeras</a>
        <div class="counts">
            <div class="row">
                <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                    <div class="count-box">
                        <i class="bi bi-journal-richtext"></i>
                        <span data-purecounter-start="0" data-purecounter-end="<?php echo $vistos; ?>" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Vistos</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                 <?php if($_COOKIE["cookie_obra"] != $id_obra) { ?>
                    <div class="count-box" id="votar">
                        <a href="#body" onclick="voto(<?php echo $id_obra; ?>);"><i class="bi bi-hand-thumbs-up-fill" style="color:rgb(255,255,255)"></i></a>
                        <label class="votacion" id="votacion"><span data-purecounter-start="0" data-purecounter-end="<?php echo $likes; ?>" data-purecounter-duration="1" class="purecounter"></span></label>
                        <p>Me gusta</p>
                    </div>
                <?php } else { ?>
                    <div class="count-box" id="votar">
                        <i class="bi bi-hand-thumbs-up"></i>
                        <label class="votacion" id="votacion"><span data-purecounter-start="0" data-purecounter-end="<?php echo $likes; ?>" data-purecounter-duration="1" class="purecounter"></span></label>
                        <p>Me gusta</p>
                    </div>
                <?php } ?>
                </div>
            </div>
    </div>
    <?php require_once 'libros.html'; ?>
    </section>
    <?php require_once 'footer.html'; ?>
</body>
</html>