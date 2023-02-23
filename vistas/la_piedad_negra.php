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
               <h2>LA PIEDAD NEGRA</h2>
                <p>
                Todo gira en torno a una terrible pintura de un autor desconocido, digna de ser la quinceava obra negra de Goya, pero más cercana a La Piedad de Baldomero Romero Ressendi. La blanca Piedad de Miguel Ángel llena de luz a la virgen María, mientras sostiene en sus brazos maternales a un Jesús moribundo; pero el cuadro que pende frente a mí es terrible como el abismo. Sus trazos verdosos y acres muestran una virgen oscura y terrorífica, sosteniendo a un Jesús esquelético y maltratado. En sus pies reposan dos cráneos y una corona de espinas, y hay un cielo sin luz con una cruz invertida, como la sombra de Pedro crucificado entre borrosos fondos.
                </p>
                <p>
                Y mientras veo tan aterrador cuadro, siento como la piel me cuelga y los ojos se me hunden. De repente me siento famélico, cual león anciano que no caza. Y el hambre se hace inaguantable, a tal punto que debo arrodillarme porque no puedo tenerme en pie. Aun así, no soy capaz de dejar de ver ese horrible cuadro, solitario, colgado en la ampla pared, iluminado por dos reflectores blancos que le dan un protagonismo fantasmagórico.
                </p>
                <p>
                Y poco a poco la piel se me seca, y desaparecen mis ojos y mis labios, y mis manos se alargan y se vuelven falanges, mientras siento cómo toda mi carne es absorbida por los ojos de esa maligna virgen, de mirada trágica y dolorosa. Al mismo tiempo siento que a los pies destrozados de Jesús caen mis deseos y mis sueños.  
                </p>
                <p>
                Así poco a poco voy desapareciendo, dejando un osario horripilante en el suelo lustroso. Mientras el cuadro de La Piedad, triunfante, destruye mi existencia con sus pinceladas magistrales, enviándome a una Siberia negra y fría. Es así que el arte absorbe la genialidad de los virtuosos y la voluntad de los apasionados.
                </p>
            </div>
        </div>
        <br>
        <div class="fb-like" data-href="<?php echo $url; ?>" data-width="" data-layout="" data-action="" data-size="" data-share="true"></div>
	<br></br><a href="javascript:history.back(-1);" title="Ir la página anterior">Volver</a> | <a href="la_lluvia.php#body" title="Leer La Lluvia">Leer La Lluvia</a>
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