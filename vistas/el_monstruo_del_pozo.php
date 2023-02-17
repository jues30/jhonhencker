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
            <h2>EL MONSTRUO DEL POZO</h2>
                <div class="row" align="justify">
                    <p>
                    En el oscuro pozo se escucha el gorgoteo
                    <br>donde la luminosidad no alcanza a llegar
                    <br>y los oscuros horrores se esconden
                    <br>en el fondo como agazapados por voluntad.
                    <br>
                    <br>Allá abajo, invisible pero audible
                    <br>se esconde el monstruo, en el fondo,
                    <br>atento a que los ojos inmolen otra atención
                    <br>y poder trepar del hueco, veloz y feroz.
                    <br>
                    <br>Y así bajar a la aldea a devorar niños y niñas,
                    <br>triturar pequeños huesos como bambúes,
                    <br>liberar ese hediondo aliento de vapor rojo
                    <br>y saciar su sed con besos de muertos azules.
                    <br>
                    <br>Y cuando toda la atención del pueblo se enfoque,
                    <br>olvidando los pederastas y los blasfemos,
                    <br>todos los aldeanos irán en busca del monstruo.
                    <br>
                    <br>Pero ninguno se atreverá a bajar al pozo
                    <br>a matar la bestia que ellos liberaron
                    <br>pues el crujir del festín los espantará.
                    </p>
                </div>
            </div>
        </div>
	<br></br>
        <a href="javascript:history.back(-1);" title="Ir la página anterior">Volver</a> | <a href="el_grito_de_los_blasfemos.php#body" title="El Grito de los Blasfemos">Leer El Grito de los Blasfemos</a>
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