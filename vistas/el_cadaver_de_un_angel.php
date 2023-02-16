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
               <h2>EL CADÁVER DE UN ÁNGEL</h2>
                <p>Caminaba por una bella senda
                <br>Bordeada de frondosos robles,
                <br>Cuando de repente me topé
                <br>Con una imagen repleta de horrores:
                <br>
                <br>Un Ángel yacía inerte
                <br>En una zanja poco profunda.
                <br>Desprendía un hedor a sangre seca
                <br>Y su cabello de oro flotaba en una charca inmunda.
                <br>
                <br>Desplumado por completo
                <br>A punta de mordiscos
                <br>Provenientes de perros que hundían en la lívida carne
                <br>Sus sarnosos y feroces hocicos.
                <br>
                <br>Las moscas rondaban con violencia
                <br>El cuerpo necroso y acabado,
                <br>Y los gusanos formaban colonias
                <br>En su vientre ya desfondado.
                <br>
                <br>¡¿Quién sería capaz de tal atrocidad?!
                <br>Me pregunté con extrañeza;
                <br>Pero a mi alrededor sólo había robles y araucarias
                <br>Que se mostraban frondosas y esbeltas.
                <br>
                <br>El cielo y el infierno ya no son los mismos,
                <br>Los hombres dejaron los dioses,
                <br>Ya la fe ha desaparecido
                <br>Y surgen las demostraciones.
                <br>
                <br>Ya cadavérico el rostro
                <br>Se mostraba lúbrico ante el día,
                <br>Y sus ojos ya eran cuencas
                <br>Directas a sus delicias.
                <br>
                <br>¡¿Quién sería capaz de tal atrocidad?!
                <br>Mas ante mí estaba la respuesta,
                <br>Y me agazapé frente al cuerpo a llorar,
                <br>Pues sabía quién era el asesino de la belleza.
                <br>
                <br>Los hombres ya no creen
                <br>Lo que se les impone.
                <br>¡¿Quién sería capaz de tal atrocidad?!
                <br>Quien a la existencia de los Ángeles se opone.
                </p>
            </div>
        </div>
	<br></br>
        <a href="javascript:history.back(-1);" title="Ir la página anterior">Volver</a> | <a href="el_marcar_del_tiempo.php#body" title="El Marcar del Tiempo">Leer El Marcar del Tiempo</a>
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