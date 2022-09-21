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
               <h2>EL CASTILLO</h2>
                <p>
                La palabra corazón hace referencia a los sentimientos nacidos del amor. No es el corazón en sí el que siente, pero sí se acelera cuando tenemos cerca una persona que nos atrae. Sin embargo, ya aclarado esto, seguiré haciendo alusión a la palabra corazón.
                </p>
                <p>
                Ahora bien, hay corazones duros como el hielo, y hay otros vulnerables como la oveja. Hay unos que aprovechan la situación, cuales lobos hambrientos, y hay otros que se regalan a sí mismo, cuales enfermos a las vacunas. Hay unos que se llenan de dependencias, como los presos que han pasado toda su vida en una cárcel, y que por lo mismo les asusta el mundo.
                </p>
                <p>
                Pero tu corazón, mi amada reina, es distinto, y a lo único que se asemeja es a un poderoso baluarte, o a un imponente castillo. Allí, mi niña, hay varios habitantes, y a sus afueras ejércitos enteros para invadirlo; entre esos ejércitos uno con un estandarte poderoso: Un pendón donde tengo enarbolada mi alma. 
                </p>
                <p>
                Tienes allí sentimientos encerrados, presos de guerras pasadas; almas de hombres que te amaron pero a los que tú no amaste. Y siguen presos porque jamás salió de tu boca frase alguna, ni un desprecio ni una aceptación. Allí siguen esperando una sentencia proveniente de la reina que domina el castillo, sentada plácida sobre un trono imponente: He ahí tu razón.
                </p>
                <p>
                También hay otra clase de presos: Tus sentimientos. Estados de ánimo que jamás dejas salir, que amurallas con tu rostro inexpresivo y tu soberbia cautela. Sentimientos encerrados con barrotes de orgullo que no ceden ante los más fuertes terremotos.
                </p>
                <p>
                Y hay dos tronos allí: Uno está dominado por la reina, o sea por tu razón. Ella viste de azul, con bordados de oro y plata. Una majestuosa corona brilla en su altiva cabeza, y una mirada de granito escruta cualquier presencia. El otro trono lo domina una bella doncella, de vestido rojo como la sangre, que simboliza tu impulso. A veces, caprichosa y mimada, anda por el castillo y te hace sentir extraña, indecisa, dudosa; a veces canta, lo que te ocasiona una alegría incontenible al realizar una acción sin pensar; pero cuando se posa sobre el trono de la reina cometes errores, y llorar por ellos.
                </p>
                <p>
                Ahora bien, afuera del castillo, como mendigos en un invierno inclemente, hay poderosas pero cansadas brigadas que desean a toda costa conquistar tu corazón, invadir ese majestuoso castillo para poder dominar tu ser. Pero los muros son poderosos, pues tu silencio es un abismo profundo, un foso alrededor de torres que vigilan, cuales ojos sublimes, toda acción masculina. Y detrás tus ojos, hechos de joyas negras y preciadas, que ni los fantasmas logran burlar.
                </p>
                <p>
                Además, hay un tesoro enorme tras esos murallones: En las salas llenas de frescos y lujos, reposa tu belleza, como una tierna madre que abraza con fervor tu rostro y tu cuerpo entero. Y, sin embargo, las joyas más preciosas del castillo están en las catacumbas, donde tus brillantes sentimientos claman salir de los cofres y así encontrar por fin la felicidad en otro castillo. Allí hay joyas azules de tristezas, esmeraldas de esperanzas, rubíes de amores, ágatas de furia, y más; formando así un tesoro tan gigantesco, que ni todas las riquezas de los galeones juntadas por los piratas de todos los tiempos podrían igualar el valor de tu corazón.
                </p>
                <p>
                ¡¿Qué no daría, mi hermosa muñeca, porque no tuviera que invadir ese castillo a la fuerza, y en vez abrieras con una sonrisa esas puertas de potentes batientes?! Dime, mi amada princesa, ¿qué debo hacer para obtener las joyas de tu corazón sin necesidad de una espada y un escudo? El filo de mis palabras desaparece con el pasar de los días, y mi escudo se vence cada vez que me sonríes. Dime, mi bella porcelana, ¿qué necesito para abrir las puertas de tu corazón?
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