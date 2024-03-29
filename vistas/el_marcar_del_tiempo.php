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
            <h2>EL MARCAR DEL TIEMPO</h2>
                <div class="row" align="justify">
                    <p>
                    ¡Reloj! ¡Divinidad siniestra y horrible!
                    <br>Que inmola todo en sus manecillas,
                    <br>que vive y se agita oscilando la cadena
                    <br>como una bestia alimentada de arcilla.
                    <br>
                    <br>Yo he vivido ardiendo a tu sombra,
                    <br>esperando expulsar tu pesadilla burlona,
                    <br>mientras veo como robas el perfume
                    <br>de la belleza en todas sus formas.
                    <br>
                    <br>Aunque confieso con pena que a veces
                    <br>doy gracias porque robas de las mujeres
                    <br>su hermosura a ritmo dulce, lento y perezoso,
                    <br>liberándome así de ser un esclavo vergonzoso.
                    <br>
                    <br>Pero sepultas uno a uno a todos nosotros
                    <br>dándonos, seguro, una vida de ventaja,
                    <br>borrando de la humanidad el recuerdo
                    <br>y sin derramar ni una sola lágrima.
                    <br>
                    <br>¡Reloj! ¡Poderoso terror omnipresente!
                    <br>Que aplana todo bajo su fuerza,
                    <br>espero escaparme de ti en algún momento
                    <br>y surgir del fondo de las antorchas muertas.
                    </p>
                </div>
            </div>
            <div class="col-lg-4" data-aos="fade-right">
                <img src="assets/img/<?php echo $id_obra; ?>.jpg" class="img-fluid" alt="Obra de Alfred Kubin">
                Obra de Alfred Kubin
            </div>
        </div>
        <br>
        <div class="fb-like" data-href="<?php echo $url; ?>" data-width="" data-layout="" data-action="" data-size="" data-share="true"></div>
	<br></br>
        <a href="javascript:history.back(-1);" title="Ir la página anterior">Volver</a> | <a href="el_monstruo_del_pozo.php#body" title="El Monstruo del Pozo">Leer El Monstruo del Pozo</a>
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