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
                
            <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h2>EL GRITO DE LOS BLASFEMOS</h2>
                <div class="row" align="justify">
                    <p>
                    Los blasfemos frecuentan el borde del barranco,
                    <br>mirando abajo en el valle una iglesia rodeada de flores,
                    <br>con altos pináculos cual hidra sus cabezas
                    <br>y con ventanas negras como mirando sus entrañas.
                    <br>
                    <br>Y desde la cima gritan sus sucios improperios
                    <br>a los devotos allá abajo, cabizbajos y en silencio,
                    <br>(soñadores solitarios de labios blanquecinos
                    <br>que depositan sus deseos en imágenes de santos).
                    <br>
                    <br>Y dicen los desgraciados: ¡Tenemos en las tripas
                    <br>un Gehena ardiente y cavernario, que pujante
                    <br>concibe cada día un monstruoso bastardo,
                    <br>que es visto como enemigo en los nobles relatos!
                    <br>
                    <br>¡Pero el verdadero mal es el sacerdote adoctrinado!
                    <br>Y la iglesia que utiliza a Dios como razón omnipotente.
                    <br>¡Esa iglesia allá abajo en el valle rocoso
                    <br>es sólo una guarida de servidores sin mente!
                    <br>
                    <br>Al mismo tiempo los beatos miran hacia arriba,
                    <br>escuchando ofensas bajo la cúpula celeste;
                    <br>entonces gritan al unísono: ¡Esa gente allá arriba
                    <br>es sólo una recua de pecadores sin mente!
                </p>
                </div>
            </div>
        </div>
        <br>
        <div class="fb-like" data-href="<?php echo $url; ?>" data-width="" data-layout="" data-action="" data-size="" data-share="true"></div>
	<br></br>
        <a href="javascript:history.back(-1);" title="Ir la página anterior">Volver</a> | <a href="no_lo_sabia.php#body" title="No lo Sabía">Leer No lo Sabía</a>
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