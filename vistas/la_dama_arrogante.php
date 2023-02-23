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
               <h2>LA DAMA ARROGANTE</h2>
                <p>Ella, consciente de su belleza, declamó lo siguiente:
                    <br>"Soy hermosa, tanto que abordo todo el mal,
                    <br>al punto que el sacerdote perfuma sus sabanas 
                    <br>al tener mi rostro en su pensamiento.
                    <br>Vuelvo  a todos los hombres ignorantes
                    <br>sólo con mis encantos superficiales.
                    <br>Solos, exhalan un olor a fracaso
                    <br>con su mirada de azur sobre mis caderas,
                    <br>vacíos de pensamientos en sus ojos bellos
                    <br>mezclados con metal a causa de sus penas.
                    <br>Camino con cabeza bamboleante
                    <br>como si paseara en una góndola,
                    <br>recibiendo la atención ardorosa
                    <br>de almas vacías de esperanzas.
                    <br>Y, asesina, llena de estíos y otoños,
                    <br>aplasto con amabilidad fingida deseos efímeros
                    <br>rompiendo orgullos de hombres pobres y ricos
                    <br>y causando lágrimas en infinitos números.
                    <br>Rompo el vuelo de halcones con sonrisas de brea
                    <br>mirando al cielo como si fuera una diosa,
                    <br>hirviendo vivos a los infames profetas
                    <br>de una sociedad incrédula de inteligencia,
                    <br>saturando mi olfato de olores mezclados 
                    <br>con resina y almizcle, horrendo para mis sentidos
                    <br>pero rebosantes en los cuerpos de los mortales".
                </p>
            </div>
        </div>
        <br>
        <div class="fb-like" data-href="<?php echo $url; ?>" data-width="" data-layout="" data-action="" data-size="" data-share="true"></div>
	<br></br>
        <a href="javascript:history.back(-1);" title="Ir la página anterior">Volver</a> | <a href="el_poder_de_la_mente.php#body" title="El Poder de la Mente">Leer El Poder de la Mente</a>
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