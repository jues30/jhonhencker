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
               <h2>LA ESTATUA</h2>
                <p>
                En cada conversación que logro batirte, nace de mis nervios un bloque pétreo, poderoso como una montaña y alto como mi orgullo. Pero cuando me hieres con tus palabras, hechicera de rostro perfecto, afilas un cincel poderoso que ansía romper el muro que rodea mi alma fosforescente. Por eso, mi querida niña, decidí esculpirte en un altar subterráneo, erguido en la mella de mi negro y abismal tormento, cual beldad enarbolada. Debo hacerlo ahora, pues aún tengo la cabeza sobre los hombros; pero si sigo desentrañándote y mi corazón sigue palpitando estrepitosamente a causa de las bondades que ve en ti, pronto tendrás mi cráneo como una estrella de plata que iluminará tus anfractuosos caminos.
                </p>
                <p>
                Entonces te haré un traje digno de una diosa, y lo pintaré con todos mis sentimientos, y lo moldearé como una garita que cubre tus sentimientos. Le sacaré el azul a mis lágrimas para hacerte un manto, y lo bordaré con hilo rojo hecho de la sangre que lograré sacarme de las espinas de mi corazón. Y lo adornaré con esmeraldas que tallaré con mis esperanzas.
                </p>
                <p>
                Con mi genio y mi vida te haré unas sandalias, poniendo mi arrogancia a tus pies. Y te coronaré con una diadema de plata como la luna que te iluminará en las noches despejadas. Y en la corona engarzaré mis deseos y mis sueños, haciéndote dueña y señora de ellos. Y te daré un collar que trenzaré con mi astucia, y por joya tendrás un mundo de cristal imaginado por mí, donde vivirás cual sultana desdeñosa. Y en él, poderosa deidad, serás la ama y señora de valles, praderas, montañas, ríos, desiertos, mares y bosques. Dominarás príncipes y reyes, y te envidiarán las duquesas y las reinas, pues jamás verán princesa más hermosa.
                </p>
                <p>
                Tu altar, mi querida hechicera, lo adornaré de flores coloridas y de cirios luminosos como tus tiernos ojos. Haré que los perfumes ronden los incensarios cual culto a tu belleza, y te enmallaré con mis más férreos deseos de protegerte del mundo inclemente que se abre allá afuera; donde los crueles enanos y las cercanas vampiras ansían tus blancas alas, talladas por la mano más diestra. Esas alas que se abren en tu dorso pulido te llevarán a los mundos más dulces, teniéndome siempre como escultor, a tu lado y adorándote.
                </p>
                <p>
                Para finalizar, mi dama blanca, haré la imagen de tu rostro en el bloque más fino de todos, y trazaré, cual maestro encaprichado, las dulces siluetas de tus facciones marmóreas. Adornaré tus labios con la pasión y el brillo, y tus ojos con el fervor de una cortesana enamorada. En tus cabellos ondulantes pondré mis pensamientos, que varían con cada rizo que absorbe el mundo, y pondré nácar en tu piel tersa, dándole un tono luminoso a tu imagen esmaltada.
                </p>
                <p>
                Ahora, viéndote bajo la luz fría de las estrellas, con la cabeza altiva y el porte de una doncella, creo que ya acabé mi obra maestra. Con esto has horadado mis angustias y mis penas. Por eso te pido, mi adorada niña, que me dejes hacer esta escultura; pues, aunque no sea el mejor artista, sé que seré el hombre que más cuidará su obra.
                </p>
            </div>
        </div>
	<br></br>
        <a href="javascript:history.back(-1);" title="Ir la página anterior">Volver</a> | <a href="los_mundos_producidos.php#body" title="Los Mundos Producidos por la Mujer">Leer Los Mundos Producidos por la Mujer</a>
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