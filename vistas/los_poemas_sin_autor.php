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
                <div class="col-lg-4" data-aos="fade-right">
                    <img src="assets/img/<?php echo $id_obra; ?>.jpg" class="img-fluid" alt="Obra de Zdzislaw Beksinski">
                    Obra de Francisco de Goya
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                <div class="row" align="justify">
                     <h2>LOS POEMAS SIN AUTOR</h2>
                    <p>
                    Los Poemas Sin Autor son una obra corta inspirada en una red neuronal recurrente (inteligencia artificial) creada por el autor. Para este proyecto, Hencker quiso unir sus dos pasiones: La ingenieria y la escritura.
                    </p>
                    <p>
                    Aunque la red neuronal sólo sirvio como inspiración a estos poemas, el autor decidió llamarlos Los Poemas Sin Autor aluciendo que, aunque él creo la red neuronal e hizo los poemas, la obra pertenece a la inspiración; pero para este caso los poemas no tienen dueño alguno.
                    </p>
                    <p>
                    A continuación están algunos de Los Poemas Sin Autor (todos los poemas se encuentran en el libro Coleción):
                    </p>
                </div> 
                </div>
        </div>
        <br></br>
        <h3>LA DAMA ARROGANTE</h3>
        <p>Ella, consciente de su belleza, declamó lo siguiente:
        <br>"Soy hermosa, tanto que abordo todo el mal,
        <br>al punto que el sacerdote perfuma sus sabanas 
        <br>al tener mi rostro en su pensamiento.
        <br>Vuelvo  a todos los hombres ignorantes
        <br>sólo con mis encantos superficiales.
        <br>Solos, exhalan un olor a fracaso
        <br>con su mirada de azur sobre mis caderas,
        <br>vacíos de pensamientos en sus ojos bellos
        <br>mezclados con metal a causa de sus fracasos.
        <br>Camino con cabeza bamboleante
        <br>como si paseara en una góndola,
        <br>recibiendo la atención ardorosa
        <br>de almas vacías de esperanzas.
        <br>Y, verduga, llena de estíos y otoños,
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
        <br></br>
        <h3>GUERRERA</h3>
        <p>
        Bendito seas, mi Dios, que de ella te apiadas,
        <br>Mientras bella, se abre paso en la vida, cual alud en bajada,
        <br>y la pasión de su alma se resiste al amo tirano
        <br>al tiempo que se despierta con emociones extrañas.
        <br>Doblada por el peso de los años, ella no se rinde,
        <br>perdiendo la mirada en los muelles y en ríos crecientes,
        <br>saturando los sentidos de magia al arrullo del agua,
        <br>vive apoyada en lo positivo, como la cúpula de una iglesia.
        <br>A veces tiene voz temblorosa, cuando el alma se le encoge,
        <br>pero bajo el latido de las capitales, se irgue triunfante,
        <br>canta fuerte con su corazón puro en todos los rincones,
        <br>y casi de inmediato se disipa la soledad de su alma.
        <br>Amadísima por sí misma, ¡oh Noche!, ¡oh Corazón!,
        <br>¡oh Vino! Todos tres a sus pies se agitan de pasión.
        <br>Mientras sobre la almohada, a veces frustrada,
        <br>toma fuerza entre un sufragio de colores,
        <br>gatos furtivos, iras terribles y visiones de ilusión.
        </p>        
        <br></br>
        <h3>INALCANZABLE</h3>
        <p>
        Tú, a quien la noche toma como hija,
        <br>como esculpida en la gran piedra,
        <br>te tornas imbatible al deseo mortal.
        <br>Inalcanzable con tus carnes de niña, 
        <br>con tus juegos de virgen loca
        <br>que desesperan a los amantes.
        <br>Inalcanzable al anciano decrépito,
        <br>apasionada a las anchas alas de los ángeles,
        <br>al tiempo que, de tus ojos, tus dulces ojos,
        <br>jamás llorosos ni irritados,
        <br>desprendes caos a las soledades profundas.
        </p>
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