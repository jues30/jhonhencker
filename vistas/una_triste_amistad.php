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
               <h2>UNA TRISTE AMISTAD</h2>
                <p>¿Recuerdas, amigo mío, la furiosa tormenta, 
                <br>el rugir de las aguas y el agite de las velas?
                <br>Esa misma que a esta seca y muerta isla nos trajo,
                <br>y a la que de diez sólo dos sobrevivimos al naufragio.
                </p>
                <p>¡Oh, amigo mío, qué angustiado me encuentro!
                <br>Esta isla no es más que un sueño siniestro
                <br>del que desesperado estoy por despertar
                <br>e ignorar las atrocidades que hice tiempo atrás.
                </p>
                <p>
                ¿Recuerdas, amigo mío, cuando, con pena, dímonos cuenta
                <br>que no había comida alguna sobre esta yerta tierra?
                <br>¿Recuerdas, alma gemela, la desdicha que sentimos
                <br>al no escuchar más que al mar entre nuestros quejidos?
                </p>
                <p>No creo, amigo, que recuerdes la pobre carroña
                <br>de la que me alimenté por días sin asco ni misericordia,
                <br>al mismo tiempo que las moscas me rompían los tímpanos
                <br>al volar estridentes alrededor de tan horrible delirio.
                </p>
                <p>
                Pero sí debes recordar la lanza veloz y furiosa,
                <br>y el grito de dolor que espantó aves y movió las arbóreas copas,
                <br>de la sangre que corrió por la espalda de la presa
                <br>mientras yo, como demonio, la atacaba con fiereza.
                </p>
                <p>
                A menudo pienso que la amistad es más una necesidad
                <br>que un placer que el hombre puede enteramente disfrutar.
                <br>Es casi imposible encontrar un alma bondadosa
                <br>que muera por evitar que la supervivencia se imponga.
                </p>
                <p>
                ¡No puedo salir de esta isla, mi amigo querido!
                <br>Pues caníbal me llamarían en el mundo de los vivos.
                <br>¡Perdóname tú, amigo del alma! ¡Te lo imploro, amado ángel!
                <br>Pues el hambre y la locura me impulsaron a vivir comiendo de tu carne.
                </p>
            </div>
        </div>
	<br></br>
        <a href="javascript:history.back(-1);" title="Ir la página anterior">Volver</a> | <a href="un_magico_cuadro.php#body" title="Un Mágico Cuadro">Leer Un Mágico Cuadro</a>
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