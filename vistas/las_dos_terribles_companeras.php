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
                 <h2>LAS DOS TERRIBLES COMPAÑERAS</h2>
                <p>
                La Depresión y la Soledad son dos compañeras terribles. Una es azul como las lágrimas y la otra negra como el vacío. Susurran al noble oído consejos atroces y clavan en el cerebro acciones tremendas. Mellan el orgullo de los hombres y quiebran el ánimo cándido de las mujeres. Atacan con fuertes mordiscos de horribles sonrisas a los cuellos suaves, y sofocan con desespero la mente. Reptan en cada oportunidad cual merodeador implacable, buscando siempre enarbolarse en el cráneo con puño de hierro. La Soledad cierra las paredes de las habitaciones, aislando el ser del mundo y emparedando la mente en la oscuridad cual cadáver entre muros. Mientras la Depresión, con rostro mutilado, aprieta el corazón con manos de hielo, cobrándonos con fiereza momentos felices y desfigurando la realidad cual niño a una arcilla. 
                </p>
                <p>
                ¡Nunca escuches sus consejos! Son bestias amorfas que confunden el juicio. Desahógate con ellas, pero no les des confianza. Y cuando intenten atraparte con sus feas manos de lánguidos dedos, aléjate. ¡No dejes que ellas cobren por tu felicidad! Cuando llegue la Soledad recuerda que nadie está realmente solo. No dejes que esa negra musa vestida de terror te cierre los ojos para que no veas las compañías que te rodean. La Soledad no es más que la ignorancia de quienes están cerca de nosotros. Y cuando la Depresión intente abrazarte con sus brazos álgidos apaléala con sonrisas. Que de las heridas de ese monstruo azul salga hielo y sangre. ¡Deja de ellas sólo un vestigio desollado con el blanco de las risas y el atardecer tornasolado de la felicidad!
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