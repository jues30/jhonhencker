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
            <h2>EL CULTO</h2>
                <div class="row" align="justify">
                    <p>
                    Errante en la noche, entre lagos transparentes,
                    <br>miro alrededor la tierra fría e infinita,
                    <br>chapoteada de algunos árboles sin hojas
                    <br>con ramas nudosas como dedos de ancianos.
                    <br>
                    <br>Y al fondo del camino se elevaba el templo
                    <br>de columnas grandes y ventanas negras
                    <br>como ojos horribles que miran hacia adentro
                    <br>y mantienen ocultos maleficios antiguos.
                    <br>
                    <br>Al entrar al tenebroso edificio veo por fin
                    <br>un culto enfermizo creado por acólitos
                    <br>que ponen como deidad tu imagen
                    <br>y te veneran como un objeto singular.
                    <br>
                    <br>¡Qué nauseas me dan esos rituales!
                    <br>Una sensación de miedo y asco a la vez.
                    <br>Adolescentes pálidos y viejos hediondos gritan:
                    <br>¡Cuide Dios de ella, de todas la más bella!
                    <br>
                    <br>Y mientras yo veo esos miedosos rituales
                    <br>tú duermes plácida en tu cama,
                    <br>ignorante del mundo oscuro que veo,
                    <br>soñando feliz con cuentos de hadas.
                </p>
                </div>
            </div>
        </div>
        <br>
        <div class="fb-like" data-href="<?php echo $url; ?>" data-width="" data-layout="" data-action="" data-size="" data-share="true"></div>
	<br></br>
        <a href="javascript:history.back(-1);" title="Ir la página anterior">Volver</a> | <a href="desprecio.php#body" title="Desprecio">Leer Desprecio</a>
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