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
               <h2>SIGUE ADELANTE</h2>
                <p>
                <br>Me gusta como eres,
                <br>Como se te sonrojan las mejillas,
                <br>Con tus estados repentinos y alterados,
                <br>Y como suspiras cuando digo: «Te amo».
                </p>
                <p>
                <br>Me gusta tu cuerpo no tan esbelto
                <br>Pero a mis ojos perfecto.
                <br>Cuando te sonríes con sinceridad
                <br>Y mis ojos encuentran tus ojos
                <br>Que son grandes y hermosos.
                </p>
                <p>
                <br>Me gusta cuando hablas, 
                <br>Sean incoherencias o grandes máximas,
                <br>Cuando me regañas o felicitas,
                <br>Cuando me cuidas y acaricias.
                </p>
                <p>
                <br>Y verte bajo la luna, o bajo el sol,
                <br>O bajo el fuego o las lámparas,
                <br>Acariciarte el rostro mientras callas
                <br>Y besarte la frente mientras duermes.
                </p>
                <p>
                <br>Pero si en algún momento la vida te apaga,
                <br>Y tus sonrisas se sellan
                <br>Y tus mejillas quedan blancas,
                <br>Si tus sueños se nublan y te atan cadenas
                <br>Y de todo esto yo soy culpable, 
                <br>O si soy incluso sólo parte,
                <br>No lo dudes ni un instante:
                <br>¡Déjame y sigue adelante!
                </p>
                <p>
                <br>Sé libre como las aves,
                <br>Vuela alto por los aires,
                <br>Nunca dejes que tu sonrisa se pierda,
                <br>No dejes que nadie se convierta en tu celda.
                </p><p>
                <br>No dejes que los cuervos se acerquen,
                <br>No dejes que las penas te ataquen,
                <br>No pierdas de vista el horizonte distante,
                <br>Y que ni yo evite que sigas adelante.
                </p>
            </div>
        </div>
	<br></br>
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