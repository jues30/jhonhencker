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
               <h2>NO LO SABÍA</h2>
                <p>
                Mi rutina viaja entre noches cálidas y lánguidas,
                <br>y mi angustia se refleja en sus espejos voluptuosos.
                <br>Estériles recuerdos de una vida sin problemas
                <br>donde nada he necesitado durante épocas.
                <br>
                <br>Sin embargo, la vida, que pocas veces es bondadosa
                <br>te ha puesto frente a mí, singularmente fresca,
                <br>y me di cuenta que pensé que no necesitaba nada
                <br>hasta que me di cuenta que a ti te necesitaba.
                <br>
                <br>Y de repente entre las brumas del hastío
                <br>empezaron a nacer del agua estrellas
                <br>abriendo ante mí un mundo que desconocía.
                <br>
                <br>De nada carezco, pero a mi lado te quiero
                <br>pues supe que entre monumentos altivos
                <br>tú, amada mía, eras lo único que no tenía.
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