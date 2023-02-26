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
               <h2>EL TERRIBLE TEDIO</h2>
                <p>
                Con acres colores se pintan nuestros arrepentimientos,
                <br>siempre horribles, sin importar la raza, 
                <br>opacando la bella vista de la vida
                <br>y amplificado por el terrible hastío.
                <br>
                <br>¡Oh Satán!, que sin esfuerzo prolongas nuestra locura,
                <br>te pido que calmes nuestro vil e implacable tedio,
                <br>que nos envíes a la orilla de la noche oscura
                <br>donde las sombras de la pereza desaparecen.
                <br>
                <br>¡Quítanos la corona de la desesperanza!
                <br>Lanza sobre nosotros el abrazo de la reina virgen,
                <br>sácanos el corazón negro al que nada le apetece
                <br>para finalmente temer a la muerte, y vivir con orgullo
                <br>lejos del vicio de la conformidad insaciable.
                </p>     
            </div>
        </div>
        <br>
        <div class="fb-like" data-href="<?php echo $url; ?>" data-width="" data-layout="" data-action="" data-size="" data-share="true"></div>
	<br></br>
        <a href="javascript:history.back(-1);" title="Ir la página anterior">Volver</a> | <a href="la_bruja.php#body" title="La Bruja">Leer La Bruja</a>
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