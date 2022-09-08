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
            <h3>La Desaparición de Amanda</h3>
            <p class="fst-italic">Los Jardines Rojos y otros Nocturnos</p>
                <div class="row" align="justify">
                    <p>
                    El reporte policial decía que la pequeña Amanda, de tan sólo un año, había desaparecido de su cuarto sin dejar rastro. Quien hizo la denuncia fue su madre que, destrozada, veía cómo la habitación permanecía vacía. La noche anterior había acostado a la bebé en la cama, y al día siguiente simplemente ya no estaba. Sus padres la buscaron por todos lados, pero al ver que la ventana estaba sin seguro pensaron lo peor: Quizás un desconocido había entrado a la habitación y la había raptado.
                    </p>
                    <p>
                    Casi de inmediato se inició una enorme búsqueda por todo el pequeño pueblo. Los vecinos realizaron una brigada y se apresuraron a recorrer calle por calle; al mismo tiempo que la policía miraba todas las cámaras de seguridad, esperando hallar alguna pista. Los padres de Amanda, aterrados por el asunto, fueron sólo dos días después a los medios de comunicación, lo que causó una conmoción nacional. ¿Cómo una bebé podía desaparecer de una manera tan misteriosa?
                    </p>
                    <p>
                    Sin embargo, por más que buscaron, pasaron los días y ninguna pista llevó al paradero de Amanda. Aunque se hablaba de un sospechoso que llegó al pueblo noches atrás, esta investigación no prosperó, pues su coartada era fuerte, y cinco personas la validaron. 
                    </p>
                </div>
            </div>
            <div class="row" align="justify">
                <p><br>
            Juliana, madre de Amanda, empezó entonces a sentirse descompensada, y con cada minuto que pasaba se sentía peor. No comía ni dormía bien, y a menudo entraba al cuarto de la niña, miraba la cama vacía de cobijas rosadas, y los juguetes en los estantes, y se apresuraba a llorar, sintiendo un vacío terrible en el pecho. Mientras Danilo, su padre, caminaba incesantemente por el pueblo gritando su nombre. Incluso a altas horas de la noche recorría las calles gritando. Algunos vecinos se molestaban, pero entendía su dolor, y nada decían.
                </p>
                <p>
            Y pasó una semana, y aunque el caso tuvo cobertura, no avanzó. Juliana permanecía cada vez más en la habitación, hablando sola, ya al borde de la locura. Sólo ella entraba a la habitación. Se mecía en la silla mirando la cama, abrazándose mientras se decía: «Todo va a estar bien». Pero la falta de sueño empezaba a afectarla, pues cuando Danilo le hablaba ella no le entendía, por lo que el hombre tenía que repetirle varias veces ideas muy básicas. Además, la madre encendía la luz del cuarto de la niña todas las noches, quizás para no sentir tanta soledad.
                </p>
                <p>
            Pero después de semana y media de la desaparición, ya entrada la noche, Danilo fue al cuarto de Amanda para llevarle una sopa a su esposa. Apenas entró al cuarto sintió un hedor agrio y muy fuerte que le causó una arcada. ¿Cómo Juliana no había sentido ese olor y podía permanecer allí sentada sin problema? Pero a Juliana no le importaba nada, solo quería que su hija apareciera.  Así que Danilo dejó la sopa en el suelo, se tapó la nariz con un pañuelo y empezó a acercarse al origen del olor. Y diose cuenta que ese hedor desagradable era desprendido de la cama. Entonces se acercó a la cabecera, y el misterio de la desaparición se resolvió: El padre vio con horror un pequeño brazo ceniciento entre una jardinera roja, y un poco más abajo una cabeza semejante a la de una muñeca, redonda y con poco cabello. El cuerpo gris y frío de la pequeña Amanda estaba entre el colchón y la cabecera de la cama. Se había asfixiado durante la noche.
                </p>
                <p>
            Danilo vio tembloroso el cuerpo de la bebé, e inmediatamente miró a su esposa, que tenía los ojos vidriosos y bien abiertos, aterrorizada, ahogando un grito por falta de fuerzas, mientras un peso gigante y helado de culpa y terror siseaba por todo su cuerpo, haciéndole temblar brazos y piernas. Todo el cuarto entonces pareció oscurecerse; la luz pareció vacilar y el silencio llenó todos los bordes del cuarto, mientras la luna emitía un brillo de plata que entraba por entre las cortinas blancas y alumbraba el cadáver de Amanda de manera fantasmal. Y, finalmente, Juliana pudo lanzar un grito horripilante de negación que retumbó por toda la casa, agudo y espeluznante, mientras todo el pueblo se apresuraba en tropel a su casa y se daba cuenta del macabro hallazgo.
                </p>
            </div>
        </div>
	<br></br>
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