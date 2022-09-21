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
               <h2>UN MÁGICO CUADRO</h2>
                <p>Embrujado era el aspecto de ese cielo
                <br>de visos púrpuras, fríos como el hielo,
                <br>divisado tras los picos ennegrecidos
                <br>que sostenían el gótico y espeluznante castillo.
                </p>
                <p>Allí me pareció escuchar las risas sarcásticas,
                <br>el gritar de los crueles bufones, el susurro de las cortesanas,
                <br>los pasos cautos del brillante asesino
                <br>y los ronquidos del rey al que el tedio ha roído.
                </p>
                <p>
                Pero lo que más me causó curiosidad y admiración
                <br>fue la ventana en la torre más alta que sobresale del murallón.
                <br>Allí, como una aparición majestuosa, veo tu pálido rostro
                <br>con la mirada perdida en el cielo, y sobre el marco recostados los codos,
                </p>
                <p>Iluminando tu blanca faz las estrellas y la luna llena
                <br>mientras el viento mece tus cabellos de seda,
                <br>pensando con dulzura y romanticismo quién será el hombre que mira
                <br>desde afuera del lienzo, y que, fascinado por tu belleza, suspira.
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