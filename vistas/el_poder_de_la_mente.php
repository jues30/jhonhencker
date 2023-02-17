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
               <h2>EL PODER DE LA MENTE</h2>
                <p>
                De vez en cuando se debe encadenar a la mente,
                <br>pues puede volverse un enemigo terrible,
                <br>igual que la Muerte que suplica por una vela
                <br>o un dolor amplio como onda sublime.
                <br>
                <br>Los pensamientos se vuelven afilados
                <br>como una espada que no se ablanda,
                <br>y asfixia el débil cuerpo con espasmos
                <br>como ahogado en su sangre coagulada.
                <br>
                <br>Contempla el negro futuro como espejo
                <br>de frutos verdes, podridos y amargos,
                <br>distorsionando la realidad de la vida
                <br>con una ansiedad de ojos cerrados.
                <br>
                <br>¡No dejes que la mente se convierta
                <br>en una bestia repleta de miedos!
                <br>Respira hondo y empotra la cabeza
                <br>entre unos hombros firmes y pétreos.
                <br>
                <br>¡No pienses mil veces en dar el paso!
                <br>Apaga el Diablo con potente decisión.
                <br>Que la mente retire los dedos lánguidos
                <br>que llenan las metas de confusión.
                </p>     
            </div>
        </div>
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