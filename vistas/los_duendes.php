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
                    <br><br><br><img src="assets/img/<?php echo $id_obra; ?>.jpg" class="img-fluid" alt="Obra de Edward Gorey">
                    Obra de Edward Gorey
                </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Los Duendes</h3>
            <p class="fst-italic">Literatura Tenebrosa</p>
                <div class="row" align="justify">
                    <p>
                    Imagina esto: que vives solo y en medio de la silenciosa y oscura noche escuchas pequeños pasos sobre el techo o en el primer piso de tu casa, sin tener gatos o perros. O imagina que si no cierras las puertas éstas empiezan a mecerse como si una mano invisible las abriera; peor aún, se cerraran de golpe sin viento. Imagina que debes dormir con la luz encendida porque apenas la apagas ves tres figuras pequeñas y más negras que la misma penumbra, de pie e inmóviles como estatuas, mirándote desde el umbral de la puerta, fijos, esperando que te duermas. ¿Podrías dormir con esas tres sombras a tus pies? Imagina que esas tres pequeñas figuras se acercan cada vez más a la cabecera de tu cama con cada parpadeo… cada vez más cerca, hasta estar casi en tu rostro… pues ese es mi diario vivir desde ya casi un mes.
                    </p>
                    <p>
                    Todo empezó durante mi cumpleaños. Una tía que vive en el extranjero me envío como regalo tres pequeñas estatuas de duendes para poner en el jardín. Un regalo, creo yo, para salir del paso. Yo simplemente las dejé en el jardín y poca atención le puse. Pero casi de inmediato empecé a sentir presencias en mi hogar. Vuelvo y aclaro que vivo solo. Empecé a sentir pequeños empujones en las pantorrillas cuando subía o bajaba las escaleras, como si alguien pequeño intentara lanzarme por los escalones. Incluso alcancé a pensar que eran pequeños temblores.
                    <p>
                </div>
            </div>
            <div class="row" align="justify">
                <p>
                    Pero ese era sólo el comienzo. En la cocina los cubiertos empezaron a cambiar de cajones, incluso apareciendo en las gavetas más altas, donde tenía las ollas. El suceso con cubiertos más extraño fue cuando encontré una cuchara en el baño del segundo piso. Además, los productos de aseo (como el desodorante y el jabón), empezaron a acabarse bastante rápido. Todo esto pueden parecer travesuras mínimas, y lo son, pues lo verdaderamente aterrador empezó hace tan sólo un mes.
                </p>
                <p>
                    Cuando mi madre vino a visitarme nos tomamos una foto en el jardín con la casa de fondo, pues era un día soleado y agradable… las estatuas de los duendes no salieron en la foto. Es como si hubieran desaparecido por completo. Mi madre no se dio cuenta del detalle; pero yo sí, pues ya tenía sospechas de esos malditos seres. Todos estos extraños eventos habían empezado desde mi cumpleaños, por lo que deducir no era difícil. Y cuando fui consiente que eran ellos, empecé a verlos. ¡Los vi! Empecé a verlos corriendo por la casa, pequeños y como sombras tridimensionales. Eran rápidos y aterradores. No les veía el rostro ni el cuerpo, sólo veía una masa negra y bípeda que a veces se quedaba quieta y, de repente salía a correr. Otras veces simplemente se asomaba en algún rincón de la casa, silenciosos, espiándome, aterrándome.
                </p>
                <p>
                    De repente empezaron a entrar a la casa por las noches a esperar a que yo me durmiera. Yo sentía su presencia cerca de mi cama, por lo que tuve que empezar a dormir con las luces prendidas y el televisor encendido para no quedarme en el silencio y en la oscuridad absoluta. No quería percibirlos. Sólo quería olvidarlos, ignorarlos y poder dormir en paz.
                </p>
                <p>
                    Hace unos días mi novia decidió quedarse a dormir; pero a las tres de la mañana empezaron a escucharse pasos en la cocina, allá abajo. Primero fueron leves, pero de repente se sintió el caer de un cuchillo. Esto fue suficiente para que ambos quedáramos sentados del miedo en la cama. Creo que sobra decir que ella ya me aseguró que jamás se quedaría de nuevo en mi casa.
                </p>
                <p>
                    Así que ayer, furioso, bajé a primera hora del caluroso día y salí al jardín, y destrocé las estatuas de los duendes con un martillo. Creo que los vecinos se alarmaron, pero nada dijeron. Mientras las rompía, sentía satisfacción y a la vez terror por alguna represalia sobrenatural de esos pequeños y malditos seres. Había dos caminos: o me libraba o me condenaba.
                </p>
                <p>
                    Hoy, ya de noche, acabé de sentir cómo se abría lentamente la puerta de mi casa… ahora escucho suaves pisadas subiendo las escaleras… y, no quero voltear a mirar porque sé que están detrás de mí, en el umbral de mi puerta, inmóviles como figuras de mármol negro, con un aura roja a su alrededor, y estoy seguro que están muy molestos.
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