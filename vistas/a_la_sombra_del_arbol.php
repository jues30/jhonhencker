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
               <h2>A LA SOMBRA DEL ÁRBOL</h2>
                <p>Afortunado yo que, 
                <br>bajo el crepúsculo dorado y rojo, 
                <br>peino tu cabello y me pierdo en tus ojos. 
                <br>
                <br>Afortunado el árbol que, 
                <br>amparándonos con sombra y calma, 
                <br>disfruta de tu cuerpo tendido en sus ramas. 
                <br>
                <br>Afortunado el viento que, 
                <br>llevando con él dulces fragancias, 
                <br>acaricia tu rostro y calma mis ansias. 
                <br>
                <br>Afortunado el río que
                <br>pasa cerca, azulado, siseante y puro,
                <br>y que nos refresca y arrulla con su susurro.
                <br>
                <br>Afortunadas las hojas 
                <br>que descansan en tu regazo, 
                <br>mientras nos entrelazamos las manos, 
                <br>mientras llega la noche de plata, 
                <br>abrazados como estatuas blancas, 
                <br>mirándonos con amor a la sombra del árbol.
                </p>
            </div>
        </div>
	<br></br>
        <a href="javascript:history.back(-1);" title="Ir la página anterior">Volver</a> | <a href="el_cadaver_de_un_angel.php#body" title="El Cadáver de un Ángel">Leer El Cadáver de un Ángel</a>
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