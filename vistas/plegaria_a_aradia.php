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
            <h2>PLEGARIA A ARADIA</h2>
                <div class="row" align="justify">
                    <p>
                    Rebosante de una infancia ardiente
                    <br>llenas de bondad mi corazón deformado
                    <br>lanzando lejos los terribles estertores
                    <br>de las bestias que abordan mi alma,
                    <br>al tiempo que conquistas el abismo
                    <br>que se abre profundo en mi pecho,
                    <br>lleno de horror y remordimiento
                    <br>y plagado de sucios encantos.
                    <br>
                    <br>Tú, amada, limpias todo mi ser,
                    <br>un ser terrible bajo una luna ondulante.
                    <br>Iluminas esas sombras profundas
                    <br>y espantas esos cortejos de clamores infernales.
                    <br>
                    <br>Tiembla ahogada la tristeza de mi alma
                    <br>cuando con tu dulce caricia mi espíritu calmas.
                    <br>Desfila inofensiva en firmes camposantos
                    <br>parte de mi angustia, exiliada por tu alegría.
                    <br>
                    <br>¡No me quites, por lo que más quieras, tu compañía!
                    <br>Mi humanidad no aguantaría tu fría ausencia. 
                    <br>Necesito que quites los clavos y abras la celda
                    <br>en donde mi cuerpo esquelético se revuelca.
                    <br>
                    <br>Sé que odias la nube y amas el perfume,
                    <br>que adivinas y habla con el viento,
                    <br>que te burlas arrogante de lo ridículo
                    <br>y que, misteriosa, aplastas el hastío.
                    <br>
                    <br>También sé que llamas a los espíritus,
                    <br>y domas con mano suave las bestias.
                    <br>Por todo esto, todo esto que amo, te pido
                    <br>que no me prives de tu corazón tierno.
                    <br>
                    <br>A ti, Aradia, vida mía, adoro,
                    <br>sin ti, vida mía, me extingo,
                    <br>de ti, vida mía, dependo
                    <br>y por ti, vida mía, me muero.
                    </p>
                </div>
            </div>
        </div>
        <br>
        <div class="fb-like" data-href="<?php echo $url; ?>" data-width="" data-layout="" data-action="" data-size="" data-share="true"></div>
	<br></br>
        <a href="javascript:history.back(-1);" title="Ir la página anterior">Volver</a> | <a href="la_estatua.php#body" title="La Estatua">Leer La Estatua</a>
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