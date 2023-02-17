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
            <h2>LA LLUVIA</h2>
                <div class="row" align="justify">
                    <p>
                    Se embriaga la noche con cada grito de la tormenta
                    <br>que se lanza hacia los cielos encapotados
                    <br>y a mi espíritu alivia de grandes dolores 
                    <br>como a los enfermos cuando la muerte se agudiza.
                    <br>
                    <br>La noche agarra las calles vencidas
                    <br>al igual que mi cuerpo cansado del día,
                    <br>mientras en el balcón caen incesantes
                    <br>las gotas arruinadas de la lluvia sombría.
                    <br>
                    <br>Y aunque mi alma se regocija con el sonido
                    <br>del caer del agua bajo mis cobijas
                    <br>en verdad mi felicidad es ver tu rostro.
                    <br>
                    <br>La lluvia allá afuera ruge y brama,
                    <br>pero tu con tu sonrisa y tus dulces palabras
                    <br>llena de bienestar mi corazón y mi alma.
                </p>
                </div>
            </div>
        </div>
	<br></br>
        <a href="javascript:history.back(-1);" title="Ir la página anterior">Volver</a> | <a href="el_castillo.php#body" title="El Castillo">Leer El Castillo</a>
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