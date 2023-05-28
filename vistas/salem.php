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
            <h2>SALEM</h2>
                <div class="row" align="justify">
                    <p>
                    Desde las frías alturas de las colinas grises
                    <br>veo bajar a medianoche a la bruja
                    <br>bordeada de una blanca y fría bruma
                    <br>que se abre a su paso como espantada
                    <br>cual telaraña de insectos malignos
                    <br>rota por una poderosa presencia.
                    <br>
                    <br>Y canta horrendas y oscuras letanías
                    <br>sobre niños tristes y calderos hediondos,
                    <br>y sobre alguna horca o alguna hoguera
                    <br>de la que escapó con heridas horrendas.
                    <br>
                    <br>Y arrastras trae el cuerpo de un infante
                    <br>con los huesos destrozado y flácida la carne
                    <br>mientras deja un rastro rojo en el pasto
                    <br>y mancha las flores con un gran desagrado.
                    <br>
                    <br>¡Esa maldita bruja que baja de la colina
                    <br>ha vuelto a cometer sus oscas fechorías!
                    <br>¿Quién sabe de qué aldea cercana ha robado
                    <br>ese bulto que arrastra, que antes era humano?
                    <br>
                    <br>¡¿Cuántas veces hemos de lincharla y quemarla?!
                    <br>Estamos cansados de ver su horrible rostro
                    <br>a la luz mimbreña de las lámparas danzantes
                    <br>al tiempo que nos lanza esa podrida risa triunfal.
                    <br>
                    <br>Y la infame Muerte parece ignorarla siempre,
                    <br>mientras ella se regodea de amar al macho cabrío
                    <br>y de servir bajo la luna a Satán Trismegisto.
                    <br>
                    <br>¡Oh vieja maldita, espero que te conviertas
                    <br>en alimento de los zapatos de todos los aldeanos
                    <br>antes que tu caos vacíe otra cuna inocente!
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