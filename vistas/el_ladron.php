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
                    <img src="assets/img/<?php echo $id_obra; ?>.jpg" class="img-fluid" alt="Obra de Zdzislaw Beksinski">
                    Obra de Zdzislaw Beksinski
                </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>El Ladrón</h3>
            <p class="fst-italic">Literatura Tenebrosa</p>
                <div class="row" align="justify">
                    <p>
                    Fue una noche de fiesta como ya se había vuelto costumbre. Un sábado un poco alocado en el centro de Suba para dispersar un poco el estrés del trabajo. Llegamos al puente peatonal que tenía que cruzar para llegar a mi casa, que quedaba detrás del centro comercial, al otro lado de la avenida. Mis amigos, como siempre, tomaron un taxi y se fueron para sus respectivas casas. Yo, inocente del peligro, subí solo el puente, algo que ya había hecho incontables veces; pero esa noche fue diferente. 
                    </p>
                    <p>
                    Estaba llegando al final del puente cuando un hombre alto y moreno se puso frente a mí con un cuchillo enorme. La borrachera se me pasó en ese momento, pasmado por el temor. Inicialmente los vapores del licor me impulsaron a defenderme, pero la razón me hizo entregarle mi celular al inquieto ladrón. Pero, no contento con eso, el infeliz me pidió la billetera y las llaves. Yo no pude hacer más que entregarlas, pues temía que tuviera compañía; y así era, pues en ese momento salió otro hombre que me seguía. Me insultaron y me dijeron que me fuera sin hacer ruido. Yo, impotente y furioso, no pude hacer más que devolverme hasta la mitad del puente. Y cuando ambos ladrones salieron a correr, yo di media vuelta y seguí hacia mi casa.
                    </p>
                </div>
            </div>
            <div class="row" align="justify">
                <p><br>
            La cabeza me palpitaba de la adrenalina, y todo mi cuerpo temblaba. La falta de acción me rondaba la mente, y pensaba una y otra vez qué habría pasado si me hubiera demorado un poco más en el bar, o quizás menos. Quizás nada de esto hubiera pasado. También pensé en la cantidad de información que tenía en el celular: Contactos de familia y amigos, contactos de trabajo, fotos y videos. Recordé que no había descargado las fotos de mi viaje a Guatavita; pero al menos le había enviado algunas a mi hermana, por lo que podía pedírselas después. ¡Y los documento! Realizar los trámites de la libreta militar, de la cédula, de la licencia de conducir… ¡Malditos ladrones! Tenía algo de dinero, no mucho; pero recordé que tenía las tarjetas de débito. Entonces apresuré el paso porque tenía que bloquearla, pues allí tenía la quincena recién depositada.
                </p>
                <p>
            Y mientras iba sumido en mis pensamientos y preocupaciones, vi que de una calle cercana salieron tres hombres corriendo. «¿Otro robo?» pensé. «¡Malditas ratas, deberían morirse todas!» volví a pensar con rabia; pero este pensamiento pareció una profecía. Pensé en ir a ayudar la víctima, pues yo mismo había sido una victima reciente. Entonces vi a dos hombres tirados en el piso. Uno en la mitad de la calle, inmóvil y sobre un charco de lo que parecía ser sangre. Sus manos estaban sobre el cuello, y estaba en posición fetal. Supe casi de inmediato que estaba muerto, y que lo habían matado con una puñalada en el cuello. El terror me petrificó. Nunca había visto un muerto en mi vida, y frente a mí estaba un cadáver.
            <br>Pero volví de mi sopor al escuchar la voz del otro sujeto que estaba sentado contra una pared. Tenía sangre en el pecho. Al parecer este hombre también había sufrido algunas puñaladas. Entonces me acerqué y, llámese karma o coincidencia, que era el mismo maldito que me había robado en el puente peatonal. Al parecer a esos desgraciados también los había robado, o era un ajuste de cuentas. 
                </p>
                <p>
            -¡Ayúdame papá! Llama a una ambulancia.
            <br>Entonces me acerqué, le revisé los bolsillos y encontré mi billetera. La tomé de inmediato. Pero no encontré mi celular. Entonces, con un humor macabro, me levanté y le dije al ladrón con desdén: -Lo siento, no puedo llamar una ambulancia porque un maldito se robó mi celular.
            <br>Y me retiré mientras miraba de reojo cómo el hombre empezaba a contraerse de dolor, y se tendía en el pavimento al igual que su amigo muerto. Y antes de que yo saliera de nuevo a la avenida, el ladrón ya yacía muerto. Fue una noche agitada.
                </p>
            </div>
        </div>
        <br>
        <div class="fb-like" data-href="<?php echo $url; ?>" data-width="" data-layout="" data-action="" data-size="" data-share="true"></div>
	<br></br>
        <a href="javascript:history.back(-1);" title="Ir la página anterior">Volver</a> | <a href="la_desaparicion_de_amanda.php#body" title="La Desaparición de Amanda">Leer La Desaparición de Amanda</a>
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