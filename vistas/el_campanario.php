<!DOCTYPE html>
<html lang="es">
<?php require_once 'headers.php'; ?>
<body>
    <?php require_once 'menu.html'; ?>
    <section id="body" class="body">
	<div class="about-me container">
            <div class="section-title">
                <h2><?php echo InterfazGeneral::AUTOR; ?></h2>
                <p>POEMAS</p>
            </div>
            <div class="row">
            <div class="row" align="justify">
               <h2>EL CAMPANARIO</h2>
                <p>En lo alto de un campanario tenebroso y abandonado,
                <br>Rebosante de telas de arañas y suelos empolvados,
                <br>En un recinto, miedoso y frío como un glacial,
                <br>Lúgubres velas emitían y brillo rojo e infernal.
                <br>
                <br>Sobre un tálamo silencioso como los que el tiempo desgarra,
                <br>Una hermosa mujer descansaba, esbelta y mimada,
                <br>Como el gato que ronronea a los pies de una reina,
                <br>O las flores dulces acariciadas por una bella doncella.
                <br>
                <br>Ella permanecía plácidamente de medio lado,
                <br>Clavando en mí su mirada de ojos almendrados,
                <br>Mientras orgullosa, arrogante, con calma y sin presura
                <br>Narraba con voz de arpa sus pérfidas locuras.
                <br>
                <br>- «Tras una mujer astuta va un batallón de hombres como entes,
                <br>Como maniquíes desesperados por saciar sus placeres.
                <br>Mas ninguno ha tibiado siquiera mis suaves pies,
                <br>Ni ha entrado a mi ardoroso corazón alguna vez».
                <br>
                <br>Entonces sorbió ávidamente un trago de vino
                <br>De una copa de oro, como si bebiera sangre de niño,
                <br>Y en ese momento me hizo entrar a un extraño sopor,
                <br>Que destrozó todos mis nervios y mi sangre congeló.
                <br>
                <br>¡¿Cómo describir una pesadilla engendrada por el Mal
                <br>Cuando el interior se agita y se retuerce como un caudal?!
                <br>En vez de la hermosa mujer de ademanes radiantes,
                <br>Sobre la cama permanecía un esqueleto de colores acres,
                <br>Causando un chillido agrio mientras tiritaba de frío
                <br>Y que de sus cuencas emanaba un horrible humor blanquecino.
                <br>
                <br>Permanecía en la misma posición de mi amada,
                <br>Sentada de lado, cómoda, desdeñosa, aperezada.
                <br>Y en acto blasfemo arrancóse el corazón de entre las costillas
                <br>Y con su mano huesuda me lo brindó, como si fuera una amatista.
                <br>- «Mas a ti me muestro sin velos, príncipe entre las crueles,
                <br>Prometiéndote con este rubí que a tu lado veré los atardeceres»-
                <br>Dijo mientras se desmoronaba ante mí como una estatua de ceniza,
                <br>Dejándome solo entre esas tinieblas que tanto me atemorizan,
                <br>En silencio en el interior de ese campanario siniestro y embrujado,
                <br>Que bajo los mares, sólo el infierno su campana ha escuchado.
                </p>
            </div>
        </div>
        <br>
        <div class="fb-like" data-href="<?php echo $url; ?>" data-width="" data-layout="" data-action="" data-size="" data-share="true"></div>
	<br></br>
        <a href="javascript:history.back(-1);" title="Ir la página anterior">Volver</a> | <a href="a_la_sombra_del_arbol.php#body" title="A la Sombra del Árbol">Leer A la Sombra del Árbol</a>
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