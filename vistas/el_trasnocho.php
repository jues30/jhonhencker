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
               <h2>EL TRASNOCHO</h2>
                <p>Después de extrañas fiestas y festines nocturnos,
                <br>entre sátiros bufones y febriles vampiresas,
                <br>de alucinaciones, risas y embriagantes botellas;
                <br>hay que pagar un precio doloroso y nauseabundo.
                </p>
                <p>Mientras los ángeles duermen en sus lechos de terciopelo,
                <br>nosotros levantamos carcajadas en tonos turbios
                <br>a un cielo de estrellas que se cierne gótico y oscuro
                <br>sobre lámparas que iluminan a los campos y a los muertos.
                </p>
                <p>Cuando el sol emerge del horizonte, nos lacera las pupilas con su cabellera,
                <br>mientras el Demonio nos aprisiona las gargantas, causándonos fatiga y sed,
                <br>al mismo tiempo que su tambor trona en nuestras adoloridas cabezas.
                </p>
                <p>Jadeantes, nos obliga a clamar todo el oro cristalino de los cántaros,
                <br>mientras retuerce nuestras entrañas, haciendo subir la cálida hiel
                <br>que nos recuerda los amargos sabores de nuestros deleites pasados.
                </p>
            </div>
        </div>
	<br></br>
        <a href="javascript:history.back(-1);" title="Ir la página anterior">Volver</a> | <a href="una_triste_amistad.php#body" title="Una Triste Amistad">Leer Una Triste Amistad</a>
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