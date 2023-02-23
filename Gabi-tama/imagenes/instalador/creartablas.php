<?php

 
    $articulos = "CREATE TABLE articulos(
        id_articulo     INT(11) AUTO_INCREMENT PRIMARY KEY,
        titulo          VARCHAR(255) NOT NULL,
        extracto        VARCHAR(350) NOT NULL,
        fecha           TIMESTAMP,
        texto           text NOT NULL,
        thumb           VARCHAR(320) NOT NULL,
        categoria       VARCHAR(320) NOT NULL,
        keywords        VARCHAR(320) NOT NULL
    )";
    $statement = $conexion -> prepare($articulos);
    $statement -> execute();
    
    $comentarios = "CREATE TABLE comentarios(
        id_comentario    INT(11) AUTO_INCREMENT PRIMARY KEY,
        id_articulo      INT(11) NOT NULL,
        comentario       varchar(500) NOT NULL,
        usuario          varchar(50) NOT NULL,
        respuesta        varchar(255) NOT NULL,
        fecha            timestamp,
        correo           varchar(50) NOT NULL,
        sitioweb         varchar(50) NOT NULL
    )";

    $statement = $conexion -> prepare($comentarios);
    $statement -> execute();
    
    $usuarios = "CREATE TABLE usuarios(
        id_usuario      INT(11) AUTO_INCREMENT PRIMARY KEY,
        usuario         varchar(50) NOT NULL,
        password        varchar(320) NOT NULL,
        nombre          varchar(320) NOT NULL,
        email           varchar(320) NOT NULL,
        fecha_registro  timestamp,
        status          varchar(50) NOT NULL,
        avatar          varchar(320) NOT NULL
    )";

    $statement = $conexion -> prepare($usuarios);
    $statement -> execute();

    $metadatos = "CREATE TABLE metadatos(
        id_metadato     INT(11) AUTO_INCREMENT PRIMARY KEY,
        id_pagina       varchar(50) NOT NULL,
        titulo          varchar(320) NOT NULL,
        descripcion     varchar(500) NOT NULL,
        keywords        varchar(320) NOT NULL,
        link            varchar(255) NOT NULL
    )";

    $statement = $conexion -> prepare($metadatos);
    $statement -> execute();

    $paginas = "CREATE TABLE paginas(
        id_pagina           INT(11) AUTO_INCREMENT PRIMARY KEY,
        titulo              varchar(255) NOT NULL,
        descripcion         varchar(320) NOT NULL,
        descripcion_larga   text NOT NULL,
        keywords            varchar(320) NOT NULL,
        thumb               varchar(320) NOT NULL,
        link                varchar(255) NOT NULL
    )";

    $statement = $conexion -> prepare($paginas);
    $statement -> execute();

    $insertarArticulos= "INSERT INTO 
    articulos (id_articulo, titulo, extracto, fecha, texto, thumb, categoria, keywords)
     VALUES ('1', 'Cielo nuevo y tierra nueva (Apocalipsis 21:1)', 'Para comprender esta profecía, primero debemos saber a qué contexto temporal se refiere. Apocalipsis es un libro profético donde Dios revela lo que ocurrirá antes del regreso de Cristo y tras el establecimiento de su Reino en la Tierra. Uno de los sucesos más importantes es la resurrección de los santos a vida espiritual que tendrá lugar cuando Cristo regrese y será seguida por el “Milenio”, periodo de mil años en que los fieles resucitados reinarán con Cristo (1 Corintios 15:50-52; Apocalipsis 20:4,6).', current_timestamp(), 'Para comprender esta profecía, primero debemos saber a qué contexto temporal se refiere. Apocalipsis es un libro profético donde Dios revela lo que ocurrirá antes del regreso de Cristo y tras el establecimiento de su Reino en la Tierra. Uno de los sucesos más importantes es la resurrección de los santos a vida espiritual que tendrá lugar cuando Cristo regrese y será seguida por el “Milenio”, periodo de mil años en que los fieles resucitados reinarán con Cristo (1 Corintios 15:50-52; Apocalipsis 20:4,6).

Tras estos mil años, Apocalipsis 20:5 revela que habrá otra resurrección donde todos los seres humanos que hayan existido serán resucitados. La primera parte de Apocalipsis 20:5 es un paréntesis que anticipa la pregunta obvia: ¿qué pasa con los muertos que no resucitaron al regreso de Cristo?
<br><hr><br>
La frase “los otros muertos” se refiere a la mayoría de los seres humanos que han existido y que, como vemos en los versículos 12 y13, resucitarán a un tiempo de juicio. (Para los escogidos de Dios en esta vida, el juicio se está llevando a cabo ahora (1 Pedro 4:17), pero, independientemente de la resurrección en que estén, todos serán juzgados con el mismo criterio: los libros de la Biblia, la ley revelada de Dios.)
<br><hr><br>
Cuando el juicio de “los otros muertos” haya terminado, quienes hayan obedecido a Dios serán inscritos en el Libro de la vida y recibirán la vida eterna, pero quienes hayan rechazado su camino serán consumidos en el “lago de fuego”. Esto es lo que la Biblia describe como “muerte segunda”, algo diferente a la primera muerte que es el fin de la vida presente (Apocalipsis 20:14-15, énfasis añadido).', 'blog-imagen-1.jpg', 'Profecía', 'Profecía, Fe, Vida, Vida nueva, Cambio');
     INSERT INTO 
    articulos (id_articulo, titulo, extracto, fecha, texto, thumb, categoria, keywords)
     VALUES ('2', 'Alabar a Dios en medio de la adversidad: un medio para ser libre', 'El olor a orín y excrementos era nauseabundo; la humedad impregnaba cada rincón de la cárcel y la falta de luz abrumaba. El cepo apretaba fuertemente, y la privación de libertad injusta volvía más terrible todo. Imagino que Pablo miró a Silas y le guiñó un ojo, y Silas sonrío de forma tímida mientras caían sus lágrimas. Una oración de fe inundó de paz la medianoche que cubría el cielo negro sobre sus hombros. Los otros presos vociferaban groserías y se burlaban de esos dos locos enamorados de Jesús.', current_timestamp(), 'El olor a orín y excrementos era nauseabundo; la humedad impregnaba cada rincón de la cárcel y la falta de luz abrumaba. El cepo apretaba fuertemente, y la privación de libertad injusta volvía más terrible todo. Imagino que Pablo miró a Silas y le guiñó un ojo, y Silas sonrío de forma tímida mientras caían sus lágrimas. Una oración de fe inundó de paz la medianoche que cubría el cielo negro sobre sus hombros. Los otros presos vociferaban groserías y se burlaban de esos dos locos enamorados de Jesús.
<br><hr>
Los habían azotado con varas, por lo que sus espaldas estaban al rojo vivo. La crueldad romana se reflejaba en las llagas abiertas que dejaban al descubierto la carne que, mezclada con la sangre y el sudor, se adhería a las pocas ropas que cubrían sus cuerpos. El dolor era irresistible, moverse, un tormento. De pronto, en medio de tan atroz padecimiento, Pablo comenzó a entonar un salmo y la prisión se llenó de paz y luz. Silas se unió al canto, sintiendo que su corazón danzaba (Hechos 16: 16-40).
<hr><br>
Como Cristo, Pablo sabía que predicar el Evangelio iba a representar acusaciones falsas, dolores, persecución y angustia. Sin embargo, su adoración estuvo siempre presente, dando testimonio fiel. Sus mejores Epístolas , según mi perspectiva, las más profundas y llenas de consolación, fueron escritas desde las diferentes cárceles. Y en ninguna de sus cartas se lee una queja o un sentimiento de derrota ante tal sufrimiento. Todo esto es reflejo de un verdadero hombre de fe, capaz de adorar y alabar a Dios en todo tiempo y en todo lugar, porque era un verdadero adorador en espíritu y en verdad.
<br>
Prisiones físicas y prisiones espirituales
No sé cuál es la razón por la que tú te sientes en prisión, pero hay prisiones que no tienen rejas y sin embargo ahogan e inmovilizan, nos avasallan y restringen nuestra libertad. La actitud con la cual nos enfrentemos a ella determinará cuán libres seamos. Vivimos en una época de crisis espiritual, donde el vacío existencial contamina la vida cotidiana.
<br>
Compras compulsivas, adicciones, egoísmo, falta de solidaridad, materialismo, afán por lo efímero, son las nuevas patologías que los psicólogos debemos enfrentar. Pero hay personas como tú que llegan sintiéndose prisioneras, atrapadas en el cepo de la angustia y la frustración; algunas, luego de haber buscado la salida en el alcohol, el sexo, las drogas y esas adicciones socialmente aceptadas, como el trabajo excesivo o los medicamentos.
<br><hr><br>
Cuando la diversión se transforma en adicción.
Los jóvenes en especial recurren a las “salidas”, otra adicción disfrazada de algarabía y vista como algo de la juventud, pero a veces dichas salidas y trasnochadas implican peligros latentes. La mayor preocupación es que “salir a divertirse” es utilizado como un medio para no pensar en aquello que angustia o no deja pegar un ojo durante toda la noche.
<br>
Recuperar el deseo de celebrar la vida es algo que tenemos que lograr, la felicidad debe ser una decisión constante. Celebrar en tiempo de angustia puede ser visto como algo extraño; sin embargo, cuando celebras que no estás solo y que Dios tiene todo bajo control, es reflejo de una vida espiritual madura.
<br><hr><br>
Tu cárcel puede ser un trabajo no deseado, un matrimonio duro, un viejo rencor, una enfermedad crónica, un pasado doloroso que ha dejado marcas, una crisis financiera o todo aquello que te paraliza y te hace sentir atrapado y te priva de paz. Sea la prisión que sea, hay una sola alternativa, orar y alabar:
<br><hr><br>
Para que la medianoche se disipe (Hechos 16:25). Es en medio de los problemas donde más debes aferrarte a Dios; donde la medianoche cubre todo de desesperanza, la alabanza llenará de gozo tu ser. No dejes que las circunstancias interfieran en tu devoción hacia Dios. Pablo y Silas hicieron a un lado el sufrimiento y el cansancio para comenzar a alabar y adorar a Dios.
<br><hr><br>
Para que trascienda tu voz (versículo 25). A veces transmitir tus creencias puede resultar difícil, pero si otros te oyen alabar a Dios se harán preguntas sobre cómo puedes, imbuido en tanto problema, tener ánimo para hacerlo. Alabar es la mejor forma de testificar a los demás tu vínculo personal con Dios y tu vida transformada en gozo.
<br><hr><br>
Para entrar al mundo sobrenatural (versículo 26). Tal vez no te hayas dado cuenta, pero Dios desea llevarte al plano espiritual, porque ahí se comunica contigo. Al alabar y adorar a Dios en espíritu y en verdad entras de inmediato al mundo espiritual y remueves todas las fuerzas enemigas que te atan, sean fuerzas espirituales malignas, pecados, angustias o quebrantos. Tu vida es liberada y transformada.
<br><hr><br>
Para que otros crean (versículos 27-34). Cuando eres capaz de alabar a Dios y de adorarlo en medio de las pruebas más terribles, suceden milagros inesperados. Uno de ellos es sentir gozo en tu alma y la firme convicción de que Dios tiene todo bajo control; pero otro bastante significativo es ver la vida transformada de quienes te rodean. Incluso, aquellos que menos esperabas comienzan a experimentar alegría y deseos de tener el vínculo de amor que tú tienes con Dios.
<br><hr><br>
Deja que el Espíritu Santo obre en tu dolor. Tu cárcel puede ser de máxima seguridad y sus muros impenetrables, mas recuerda que alabar es el arma más poderosa que existe para testificar a otros el poder de Dios presente en tu vida. No importa si tu voz no es hermosa, Dios anhela escucharla; comienza hoy a darle tu mejor alabanza y tu mejor adoración, y verás cómo el poder fluye en tu vida y los milagros se vuelven cotidianos, mientras las rejas se abren y eres liberado de tu aflicción. Celebra la vida en medio de tu medianoche más fría y húmeda, porque Dios ilumina tu camino y abre la reja de tu cárcel.', 'blog-imagen-2.jpg', 'Vida', 'Tormento, Paz, Plenitud, Esperanza, Vida en abundancia');

     INSERT INTO 
    articulos (id_articulo, titulo, extracto, fecha, texto, thumb, categoria, keywords)
     VALUES ('3', 'versículos bíblicos para encontrar la felicidad', 'La Biblia es verdadero apoyo para guiar en la vida personal día a día. aqui hay algunos pequeños fragmentos para encontrar la felicidad', current_timestamp(), 'La Biblia es verdadero apoyo para guiar en la vida personal día a día. Aleteia ha elegido algunos pequeños fragmentos para encontrar la felicidad
De nada sirve correr de un lado para otro, el secreto de la auténtica felicidad no está lejos. En su Sermón de la montaña, que documentaron Mateo (Mt 5,1-16) y Lucas (6, 20-38), Jesús señala las ocho puertas para llegar a la felicidad, prometiéndola a todos los que las franqueen.
Son las famosas bienaventuranzas que proclaman la felicidad a la manera de Jesús. Una felicidad plena, sin fin, que no excluye situaciones de sufrimiento y de privación.

 <br><hr><br>
Te puede interesar:
Las bienaventuranzas hoy
En la Biblia encontramos cientos de versículos que hablan de felicidad, de alegría y de gozo. Depende de cada uno encontrar la inspiración para lograr pensar un poco menos en lo que materialmente nos priva de la felicidad y un poco más en lo que Dios ofrece, espiritualmente, para tenerlo en abundancia.
<br><hr><br>
Hay también muchas pistas para la reflexión sobre nuestro estilo de vida, pero también indicaciones para el discernimiento. Entender que nuestra felicidad no depende de las circunstancias sino de Dios se va convirtiendo así, progresivamente, en una evidencia.
<br><hr><br>

“El que está atento a la palabra encontrará la dicha, y ¡feliz el que confía en el Señor!” (Prov 16,20)

“Felices los que van por un camino intachable, los que siguen la ley del Señor. Felices los que cumplen sus prescripciones y lo buscan de todo corazón” (Sal 119,1-2)

“¡Feliz el hombre que encontró la sabiduría y el que obtiene la inteligencia!” (Prov 3,13)

“Feliz el hombre que no sigue el consejo de los malvados, ni se detiene en el camino de los pecadores, ni se sienta en la reunión de los impíos” (Sal 1,1)
<br><hr><br>
“Acude a los sabios, y te harás sabio, pero el que frecuenta a los necios se echa a perder. El mal persigue a los pecadores, y el bien recompensa a los justos” (Prov 13,20-21)
<br><hr><br>
“Sí al amor y no al egoísmo”
ZUPA W KATO
fot. Teresa Judka/Zupa w Kato
En su Carta a los gálatas, el apóstol Pablo anuncia las cualidades que el cristiano debe tener para desarrollar esta felicidad —“amor, alegría y paz, magnanimidad, afabilidad, bondad y confianza, mansedumbre y temperancia”—.
<br><hr><br>
Juan, en su Evangelio, habla de los medios para conservarla, diciendo “sí al amor y no al egoísmo, digamos sí a la vida y no a la muerte, digamos sí a la libertad y no a la esclavitud de tantos ídolos”, como exhorta a menudo el papa Francisco, recordando la regla de oro que Dios ha inscrito en la naturaleza humana.
<br><hr><br>
“Que cada uno examine su propia conducta, y así podrá encontrar en sí mismo y no en los demás, un motivo de satisfacción” (Gal 6,4)
<br><hr><br>
“Si cumplen mis mandamientos, permanecerán en mi amor. Como yo cumplí los mandamientos de mi Padre y permanezco en su amor. Les he dicho esto para que mi gozo sea el de ustedes, y ese gozo sea perfecto” (Jn 15,10-11)
<br><hr><br>
“Alégrense siempre en el Señor. Vuelvo a insistir, alégrense”, exhorta también san Pablo en su Carta a los filipenses.
Recolectar pequeñas alegrías
<br><hr><br>

Por un lado, tenemos un mal que combatir, por otro, un bien que conquistar y engrandecer recolectando las “pequeñas alegrías” de cada día, que están ahí pero que no siempre vemos y que hacen decir a Jesús en el Evangelio de Lucas: “¡Felices los ojos que ven lo que ustedes ven!” (Lc 10,23).
<br><hr><br>
Son dones de Dios para vivir con Él: ver la belleza en lo que nos rodea y en el corazón de las personas, empezando por el propio, para compartir, para ser felices, para ayudar, para dar lo mejor de nosotros: “De todas las maneras posibles, les he mostrado que así, trabajando duramente, se debe ayudar a los débiles, y que es preciso recordar las palabras del Señor Jesús: ‘La felicidad está más en dar que en recibir’” (Hch 20,35).
<br><hr><br>
Sin embargo, “el que ama la vida y desea gozar de días felices, guarde su lengua del mal y sus labios de palabras mentirosas”, advierte la Primera carta de san Pedro (3,10).
<br><hr><br>
El rey David da testimonio de esta felicidad vivida como algo muy sencillo que le acompaña en los días buenos y malos. Una alegría más fuerte que las lágrimas, que el odio y el desprecio sufridos, que le hace decir, en el más famoso de los salmos: “Tu bondad y tu gracia me acompañan a lo largo de mi vida; y habitaré en la Casa del Señor, por muy largo tiempo” (Sal 23).

Meditar con una sonrisa 
<br><hr><br>
Y como en la vida personal de todo cristiano el humor tiene un hueco, Joseph Folliet (1903-1972) –sacerdote, sociólogo, escritor francés y cofundador de los Compañeros de San Francisco– pensó en utilizar el humor para construir las “Pequeñas Bienaventuranzas” siguiendo el modelo de las del Evangelio, que se acercan más a nuestro tiempo.
<br><hr><br>
La primera es probablemente la más conocida, pero las otras también son dignas de reconocimiento:
<br><hr><br>
Bienaventurados los que se saben reír de sí mismos: siempre tendrán motivo de diversión.
<br><hr><br>
Bienaventurados los que saben distinguir una montaña de una topera: se ahorrarán muchos quebraderos de cabeza.
<br><hr><br>
Bienaventurados los que son capaces de descansar y dormir sin justificarse: serán sabios.
<br><hr><br>
Bienaventurados los que miran dónde ponen el pie: evitarán muchos disgustos.
<br><hr><br>
Bienaventurados los que saben callar y escuchar: ¡Aprenderán cosas nuevas!
<br><hr><br>
Bienaventurados los que son lo bastante inteligentes como para no tomarse en serio: su entorno los apreciará.
<br><hr><br>
Bienaventurados los que están atentos a la llamada de los demás sin creerse indispensables: serán sembradores de alegría.
<br><hr><br>
Bienaventurados vosotros si sabéis mirar con seriedad las cosas pequeñas y con tranquilidad las cosas serias: llegaréis lejos en la vida.
<br><hr><br>
Bienaventurados si sabéis admirar una sonrisa y olvidar una mueca: vuestra vida será luminosa.
<br><hr><br>
Bienaventurados si podéis interpretar siempre con benevolencia las actitudes de los demás, aunque las apariencias sean contrarias: os tomarán por ingenuos, pero ese es el precio de la caridad.
<br><hr><br>
Bienaventurados los que piensan antes de actuar y oran antes de pensar: evitarán hacer muchas tonterías.
<br><hr><br>
Bienaventurados si sabéis callar y sonreír aunque os quiten la palabra, cuando os contradigan u os pisoteen: el Evangelio empieza a penetrar en vuestro corazón.
<br><hr><br>
Bienaventurados sobre todo vosotros que sabéis reconocer al Señor en todos los que encontráis: habéis encontrado la verdadera luz, habéis encontrado la verdadera sabiduría.
<br><hr><br>
Preparar el corazón
HANDS CONCERT
Lassedesignen I Shutterstock
¿Listos para recibir la felicidad? Los versículos bíblicos son una herramienta hermosa para expresar la confianza en Dios. Aquí hay un último fragmento de la Biblia para rezar en la mañana como promesa y alabanza del día:
<br><hr><br>
“Mi corazón está firme. Dios mío, mi corazón está firme. Voy a cantar al son de instrumentos: ¡despierta, alma mía! ¡Despierten, arpa y cítara, para que yo despierte a la aurora! Te alabaré en medio de los pueblos, Señor, te cantaré entre las naciones, porque tu misericordia se eleva hasta el cielo, y tu fidelidad hasta las nubes. ¡Levántate, Dios, por encima del cielo, y que tu gloria cubra toda la tierra!” (Sal 57,8-12).', 'blog-imagen-3.jpg', 'Vida', 'Vida, Fe, Profecía, Abundancia, Felicidad, Paz, Bondad');

     INSERT INTO 
    articulos (id_articulo, titulo, extracto, fecha, texto, thumb, categoria, keywords)
     VALUES ('4', 'Dios liberando cautivos en todo tiempo', '27 Versículos de la Biblia sobre Dios liberando cautivos Versículos Más Relevantes Isaías 61:1 Versículos Conceptos El Espíritu del Señor DIOS está sobre mí, porque me ha ungido el SEÑOR para traer buenas nuevas a los afligidos; me ha enviado para vendar a los quebrantados de corazón, para proclamar libertad a los cautivos y liberación a los prisioneros;', current_timestamp(), 'Versículos Más Relevantes
Isaías 61:1<br><hr><br>
Versículos Conceptos
El Espíritu del Señor DIOS está sobre mí, porque me ha ungido el SEÑOR para traer buenas nuevas a los afligidos; me ha enviado para vendar a los quebrantados de corazón, para proclamar libertad a los cautivos y liberación a los prisioneros;
<br><hr><br>
Isaías 42:7
Versículos Conceptos
para que abras los ojos a los ciegos, para que saques de la cárcel a los presos, y de la prisión a los que moran en tinieblas.
<br><hr><br>
Salmos 102:20
Versículos Conceptos
para oír el gemido de los prisioneros, para poner en libertad a los condenados a muerte;
<br><hr><br>
Jeremías 30:8
Versículos Conceptos
Y acontecerá en aquel día declara el SEÑOR de los ejércitos que quebraré el yugo de su cerviz y romperé sus coyundas, y extraños no lo esclavizarán más,
<br><hr><br>
Ezequiel 34:27
Versículos Conceptos
El árbol del campo dará su fruto y la tierra dará sus productos, y ellos estarán seguros en su tierra. Y sabrán que yo soy el SEÑOR cuando yo quiebre las varas de su yugo y los libre de la mano de los que los han esclavizado.
<br><hr><br>
Nahúm 1:13
Versículos Conceptos
Y ahora, quebraré su yugo de sobre ti, y romperé tus coyundas.
<br><hr><br>
Ezequiel 30:18
Versículos Conceptos
En Tafnes el día se oscurecerá cuando yo quiebre allí los yugos de Egipto, y cesará en ella la soberbia de su poderío; una nube la cubrirá, y sus hijas irán al cautiverio.
<br><hr><br>
Isaías 9:4
Versículos Conceptos
Porque tú quebrarás el yugo de su carga, el báculo de sus hombros, y la vara de su opresor, como en la batalla de Madián.
<br><hr><br>
Oseas 11:4
Versículos Conceptos
Con cuerdas humanas los conduje, con lazos de amor, y fui para ellos como quien alza el yugo de sobre sus quijadas; me incliné y les di de comer.
<br><hr><br>
Salmos 68:6
Versículos Conceptos
Dios prepara un hogar para los solitarios; conduce a los cautivos a prosperidad; sólo los rebeldes habitan en una tierra seca.
<br><hr><br>
Daniel 3:25
Versículos Conceptos
El rey respondió y dijo: ¡Mirad! Veo a cuatro hombres sueltos que se pasean en medio del fuego sin sufrir daño alguno, y el aspecto del cuarto es semejante al de un hijo de los dioses.
<br><hr><br>
Salmos 107:14
Versículos Conceptos
los sacó de las tinieblas y de la sombra de muerte y rompió sus ataduras.
<br><hr><br>
Job 12:18
Rompe las cadenas de los reyes y ata sus cinturas con cuerda.
<br><hr><br>
Salmos 116:16
Versículos Conceptos
¿Ah, SEÑOR! Ciertamente yo soy tu siervo, siervo tuyo soy, hijo de tu sierva; tú desataste mis ataduras.
<br><hr><br>
Salmos 146:7
Versículos Conceptos
que hace justicia a los oprimidos, y da pan a los hambrientos. El SEÑOR pone en libertad a los cautivos.
<br><hr><br>
Ezequiel 13:20
Versículos Conceptos
Por tanto, así dice el Señor DIOS: He aquí, yo estoy contra vuestras cintas mágicas con las que allí cazáis vidas como aves; las arrancaré de vuestros brazos y dejaré ir las vidas, las vidas que cazáis como aves.
<br><hr><br>
Zacarías 9:11
Versículos Conceptos
Y en cuanto a ti, por la sangre de mi pacto contigo, he librado a tus cautivos de la cisterna en la que no hay agua.
<br><hr><br>
Job 39:5
Versículos Conceptos
¿Quién dejó en libertad al asno montés? ¿Y quién soltó las ataduras del asno veloz,
<br><hr><br>
Hechos 2:24
Versículos Conceptos
a quien Dios resucitó, poniendo fin a la agonía de la muerte, puesto que no era posible que El quedara bajo el dominio de ella.
<br><hr><br>
Salmos 142:7
Versículos Conceptos
Saca mi alma de la prisión, para que yo dé gracias a tu nombre; los justos me rodearán, porque tú me colmarás de bendiciones.
<br><hr><br>
Hechos 12:7
Versículos Conceptos
Y he aquí, se le apareció un ángel del Señor, y una luz brilló en la celda; y el ángel tocó a Pedro en el costado, y lo despertó diciendo: Levántate pronto. Y las cadenas cayeron de sus manos.
<br><hr><br>
Hechos 16:26
Versículos Conceptos
De repente se produjo un gran terremoto, de tal manera que los cimientos de la cárcel fueron sacudidos; al instante se abrieron todas las puertas y las cadenas de todos se soltaron.
<br><hr><br>
Hechos 5:19
Versículos Conceptos
Pero un ángel del Señor, durante la noche, abrió las puertas de la cárcel, y sacándolos, dijo:
<br><hr><br>
Hechos 12:7-10
Y he aquí, se le apareció un ángel del Señor, y una luz brilló en la celda; y el ángel tocó a Pedro en el costado, y lo despertó diciendo: Levántate pronto. Y las cadenas cayeron de sus manos. Y el ángel le dijo: Vístete y ponte las sandalias. Y así lo hizo. Y le dijo el ángel: Envuélvete en tu manto y sígueme. Y saliendo, lo seguía, y no sabía que lo que hacía el ángel era de verdad, sino que creía ver una visión.Leer más.<br><hr><br>
Hechos 12:17
Versículos Conceptos
Y haciéndoles señal con la mano para que guardaran silencio, les contó cómo el Señor lo había sacado de la cárcel. Y les dijo: Informad de estas cosas a Jacobo y a los hermanos. Entonces salió, y se fue a otro lugar.
<br><hr><br>
Isaías 49:9
Versículos Conceptos
para decir a los presos: Salid a los que están en tinieblas: Mostraos. Por los caminos pacerán, y en todas las alturas desoladas tendrán sus pastos.
<br><hr><br>
Salmos 119:45
Versículos Conceptos
Y andaré en libertad, porque busco tus preceptos.', 'blog-imagen-4.jpg', 'Vida', 'Vida, tormento, Prición, Liberación, cadenas');
     INSERT INTO 
    articulos (id_articulo, titulo, extracto, fecha, texto, thumb, categoria, keywords)
     VALUES ('5', '¿Sabias que la nueva jerusalen descendera del cielo?', '¿SABIAS QUE?

Muchos tal vez no le dan mucha importancia a la promesa del Señor Jesús en Jn. 14:2-3 “En la casa de mi Padre muchas moradas hay de otra manera os lo hubiera dicho: voy, pues, a preparar lugar para vosotros. Y si me fuere, y os preparare lugar, vendré otra vez, y os tomaré á mí mismo: para que donde yo estoy, vosotros también estéis”.', current_timestamp(), '¿SABIAS QUE?

Muchos tal vez no le dan mucha importancia a la promesa del Señor Jesús en Jn. 14:2-3 “En la casa de mi Padre muchas moradas hay: de otra manera os lo hubiera dicho: voy, pues, a preparar lugar para vosotros. Y si me fuere, y os preparare lugar, vendré otra vez, y os tomaré á mí mismo: para que donde yo estoy, vosotros también estéis”.
<br><hr><br>
 

Aquí; Jesús está hablando de que nos tiene un lugar en la ciudad celestial, y la promesa es que vendria pos nosotros para estar con él. Ahora veamos: Según la ENCICLOPEDIA WIKIPEDIA dice que la tierra posee un diámetro ecuatorial de 12,756 Kms y el polar de 12,713 Kms. Supongamos ahora que la tierra es una esfera perfecta.
<br><hr><br>

Por el otro lado, en el libro de apocalipsis 21:16, se indica que las dimensiones de la Nueva Jerusalén es un cubo perfecto y que posee doce mil estadios en su longitud, (cada estadio según la medida de la antigüedad es de 180 metros del sistema métrico decimal actual) y que sus medidas serían igual en su altura y anchura.
<br><hr><br>
 

Ahora bien: Según la tabla de conversiones que traen las Biblias al final, nos dicen que un estadio es igual a 180 metros, por lo cual si multiplicamos 180 metros x 12,000 estadios = 2,160,000 metros que equivalen a: 2,160 Kms  ¡¡ Imagínate que glorioso!!    2,160 km. de alto, igual 2,160 km de profundidad, e igual 2,160 km. de anchura. Equivaldría a 1/6 parte de la tierra.  ¡Anímate! ¿No te gustaría conocerla? El Señor dice: “…se fiel hasta la muerte y yo te daré la corona de la vida” Apoc.2:10
<br><hr><br>
¿Sabias que los primeros patriarcas vivieron cerca de 1000 años?
<br><hr><br>
¿SABIAS QUE?

Los primeros patriarcas vivieron cerca de mil años y que consta de 10 generaciones hasta el diluvio de Noé, y el que menos vivió fue Enoc porque la biblia dice: ”desapareció porque se lo llevo el Señor”. Ahora bien; el que más temprano tuvo hijos fue Mahalaleel y Enoc a los 65 años, y el que más tardó fue Noé a los 500 años y que la biblia hace infiere y nos da a entender que posiblemente fueron trillizos, porque dice: “Y siendo Noé de quinientos años, engendro a Sem, a Cam y a Jafet” Gen.5:32. Pero a partir del diluvio por causa de la maldad y del pecado Dios le dijo a Noé que los días de los hombres serian de máximo 120 años, aunque las generaciones posteriores todavía vivieron entre 500, 400 y 200 años y así sucesivamente se fue degradando hasta llegar a la edad actual.
<br><hr><br>
<table>
    <tr>
        <td>¿Quiénes fueron los primeros patriarcas?</td>
        <td>¿Cuantos años vivieron?</td>
        <td>¿A los cuantos años engendraron hijos?</td>
        <td>¿A quién engendraron?</td>
    </tr>
    <tr>
        <td>Adan</td>
        <td>930</td>
        <td>130</td>
        <td>Set</td>
    </tr>
    <tr>
        <td>Set</td>
        <td>807</td>
        <td>105</td>
        <td>Enós</td>
    </tr>
    <tr>
        <td>Enós</td>
        <td>905</td>
        <td>90</td>
        <td>Cainán</td>
    </tr>
    <tr>
        <td>Cainán</td>
        <td>910</td>
        <td>70</td>
        <td>Mahalaleel</td>
    </tr>
    <tr>
        <td>Mahalaleel</td>
        <td>895</td>
        <td>65</td>
        <td>Jared</td>
    </tr>
    <tr>
        <td>Jared</td>
        <td>962</td>
        <td>162</td>
        <td>Enoc</td>
    </tr>
    <tr>
        <td>Enoc (se lo llevo Dios</td>
        <td>365</td>
        <td>65</td>
        <td>Matusalen</td>
    </tr>
    <tr>
        <td>Matusalen</td>
        <td>969</td>
        <td>187</td>
        <td>Lamec</td>
    </tr>
    <tr>
        <td>Lamec</td>
        <td>777</td>
        <td>182</td>
        <td>Noe</td>
    </tr>
    <tr>
        <td>Noe</td>
        <td>950</td>
        <td>500</td>
        <td>Sem Cam Y Jafet</td>
    </tr>
</table><br><hr><br>
', 'blog-imagen-5.jpg', 'Fe', 'Cielo nuevo,Eternidad, Claridad, Luz, Dios, Rey');
     INSERT INTO 
    articulos (id_articulo, titulo, extracto, fecha, texto, thumb, categoria, keywords)
     VALUES ('6', '¿Qué dice la Biblia sobre la esposa y las bodas del Cordero?', 'El matrimonio del Cordero es uno de los acontecimientos más grandes en la Biblia. Pero, ¿quién es la esposa de Jesús?', current_timestamp(), 'Las bodas del Cordero (Jesús) es uno de los acontecimientos más grandes profetizados en la Biblia. Pero, ¿quién es la esposa de Jesús?

“Gocémonos y alegrémonos y démosle gloria; porque han llegado las bodas del Cordero, y su esposa se ha preparado.” Apocalipsis 19:7.
<br><hr><br>
¿Quién será la esposa de Jesús?<br>
La esposa es la iglesia de Cristo.

La iglesia se compone de todos los que están en camino a ser completamente libres de todo pecado, como Jesús lo es. Son los que han comenzado por el camino que los llevará a la naturaleza divina. (2 Pedro 1:4) Algunos pueden haber llegado más lejos en el camino que otros. Algunos quizás acaban de comenzar. Sin embargo, todos los que van por este camino son un miembro del cuerpo de Cristo. Se están preparando para ser la esposa de Cristo. Se están alistando.
<br><hr><br>
Son los que aman a Jesús. Son sus seguidores. Son los que tienen el gran anhelo de estar con su señor y maestro. Son los que se han decidido por servir a Jesús con todo su corazón, toda su alma y todo su ser. Es a ellos que Jesús purifica; ellos serán una iglesia gloriosa sin mancha ni arruga. Será por lo tanto santa. (Efesios 5:25-27)
<br><hr><br>
Una esposa es comparada con su novio. Por eso está escrito en 1 Pedro 1:15, “Sino, como aquel que os llamó es santo, sed también vosotros santos en toda vuestra manera de vivir.” La esposa de Cristo son aquellos que van a brillar con una claridad, pureza y santidad al igual como Él que la llamó es santo.
<br><hr><br>
“Y a ella se le ha concedido que se vista de lino fino, limpio y resplandeciente; porque el lino fino es las acciones justas de los santos.” Apocalipsis 19:8. La esposa de Cristo se alista para él. Cada segundo que tiene en esta tierra lo utiliza para prepararse para su novio. Su lino fino no le será dado durante la boda, sino que es algo que ella misma fue haciendo al andar en justicia mientras estuvo aquí en la tierra.
<br><hr><br>
“Porque muchos son llamados, y pocos escogidos.” Mateo 22:14. La esposa es la iglesia, pero no son muchos los que verdaderamente pueden considerarse parte de esta. Muchas invitaciones son enviadas, pero pocos optan por responder.
<br><hr><br>
Alístate
Si entendemos correctamente, la esposa no es una élite con cristianos especiales de los cuales sólo algunos llegan a ser parte de este grupo. La esposa será pocos en cantidad , pero no porque sólo algunos fueron invitados. Sino porque pocos optan por responder. Para poder ser parte de la esposa debemos responder a este llamado y comenzar a seguir a Jesús por este camino que Él mismo anduvo.
<br><hr><br>
Este tiempo en la tierra es tiempo de compromiso para Jesús y su esposa. Se tienen un intenso amor el uno al otro, y anhelan por reunirse. La esposa anhela estar cerca de Jesús, su esposo celestial. Ella estará dispuesta a hacer absolutamente todo, pagará el precio que cueste, para ser digna de Él y estar con Él.
<br><hr><br>
Jesús vendrá a buscar su esposa tan pronto esté lista. El tiempo es corto, pero todavía hay tiempo de gracia para la esposa para prepararse, y todavía es posible atender el llamado. Lee más sobre el arrebatamiento
<br><hr><br>
Responder el llamado para ser parte de la esposa, es el primer paso. Es tan simple como decidirse que “serviré a Dios de todo mi corazón.”  El camino que después uno seguirá está descrito en Colosenses 3:1-17. La esposa tiene su mente puesta en las cosas de arriba. La esposa es paciente, humilde, es longánima y todo lo hace en el nombre del Señor Jesús. Lo único que quiere es agilizar el día de su regreso. (2 Pedro 3:12)
<br><hr><br>
La esposa está tan enamorada que está dispuesta a pagar el precio que sea para terminar con todo el pecado, todo lo que no sea como Cristo. Ella rechaza todos estos pensamientos y los lleva a la muerte. (Colosenses 3:5) Y de esta forma la vida de Cristo puede manifestarse en ella. De este modo se convierte en un complemento para él. Con todo su ser anhela estar con Cristo, y sabe que la manera de lograrlo es siendo como Él. Al ser purificada así como él es puro, y transformada en la naturaleza divina como la suya. (1 Juan 3:2-3) Nada menos es aceptado sino la perfección. ¡Cualquier pensamiento que no sea agradable a Cristo debe ser llevado a la muerte inmediatamente! ¡El pecado no es una opción para ella! Ella quiere estar con su novio.
<br><hr><br>
Así se vuelve santa así como Él es santo. Estas son las acciones justas de los santos que se describen en Apocalipsis 19:8.
<br><hr><br>
Las bodas del Cordero
Cuando la esposa finalmente esté lista para recibir al esposo, Jesús volverá a buscar a su amada. ¡Después de tantos años de tribulación finalmente pueden unirse! ¡Todo el cielo se regocijará y celebrará este acontecimiento y habrá una gran fiesta de bodas! (Apocalipsis 19:7-8)
<br><hr><br>
Ahora la esposa puede estar junto al novio. La larga noche ha terminado. Ahora ha sido perfeccionada. Está perfectamente unida a Jesús en voluntad, en propósito, en naturaleza. Nunca más, por la eternidad se van a separar. (1 Corintios 6:17)
<br><hr><br>
Ellos están allí en el cielo; una multitud de guerreros y héroes vestidos de blanco resplandeciente. Un ejército que ha pagado el precio y dado todo para ser purificado y transformado en la imagen de Cristo. Ellos brillan más que el sol, brillan con una pureza al igual que Cristo mismo. Son santos y pertenecen a Él.
<br><hr><br>
Por supuesto, los héroes del Antiguo Testamento y los mártires de la gran tribulación, entre otros, son siervos de Dios y tienen comunión con Cristo. Pero la esposa de Cristo tiene un llamado muy especial. Ella está sentada al lado de Él; es igual a Él. Ha padecido los mismos padecimientos que Él padeció en la tierra y ahora ha recibido su recompensa. Es una recompensa mucho mayor que cualquier otra dada a alguien en el cielo o en la tierra. Ha sido puesta por encima de los ángeles, sobre querubines, por encima de toda la creación de Dios, para ser un socio y un complemento para el mismo Hijo de Dios.
<br><hr><br>
El trabajo de la esposa en la eternidad siempre estará al lado del novio. “Y el Espíritu y la Esposa dicen: Ven. Y el que oye, diga: Ven. Y el que tiene sed, venga; y el que quiera, tome del agua de la vida gratuitamente.” Apocalipsis 22:17. Ella está allí al lado de Cristo, secando lágrimas y borrando dolores.
<br><hr><br>
No hay mayor recompensa que esto. Y no podemos utilizar nuestro tiempo en la tierra de mejor manera que preparándonos para el día de su venida, con ferviente expectativa. Amar a Jesús tan alto que la vida que vivimos aquí en la tierra es digna de la esposa con la que Él quiere casarse.
<br><hr><br>
Escritura tomada de la Versión Reina-Valera 1960 © Sociedades Bíblicas en América Latina, 1960. Renovado © Sociedades Bíblicas Unidas, 1988.', 'blog-imagen-6.jpg', 'Fe', 'Bodas,Cordero, Nueva vida, Profecía, Milenio');
     INSERT INTO 
    articulos (id_articulo, titulo, extracto, fecha, texto, thumb, categoria, keywords)
     VALUES ('7', 'Letra Cristo rompe las cadenas - Alabanza', 'Alabanza de victoria por las obras de Cristo Jesús', current_timestamp(), ' 
CRISTO ROMPE LAS CADENAS
Cristo rompe las cadenasOh aleluya gloria a DiosLibre cristo me hizo libreMuriendo en las cruzJesus me liberto<br><hr><br>
OH CRISTO AMADO
Oh cristo, cristo amadoAlumbra pues mi caminoPara llevar tu palabraA pueblo desconocidoJehova es mi padreCristo es mi salvadorY el espíritu santoEs mi fortaleza<br><hr><br>
AUNQUE UN EJERCTIRO
Aunque un ejercito acampe contra miNo temerá mi corazónAunque contra mi se levante guerraYo estare confiado en mi salvadorDe quien temeré, de quien temeréJehova es mi fortaleza de mi vida<br><hr><br>
LA SEMILLA
Cuando estaba yo, lejos del señorCayo una buena semilla en mi corazónBendito señor, bendito jesusLa honra y la gloria sea para ti<br><hr><br>
JERUSALEN
Jerusalen que bonita eresCalles de oro y puertas de perlaPor esas calles voy a caminarCalles de oro y puertas de perla<br><hr><br>
CATA TU VICTORIA
Canta tu victoria mi hermanoNunca desmayes en las luchasEn las luchas y en las pruebasA nuestro salavador tenemoscuando morimos nada llevaremosni riquezas ni gananciasalla en el cielo ya tenemosuna corona y ganancia<br><hr><br>
CLAMA A MI
//Clama a mí dice El Señorclama a mí dice El Señorclama a mí dice El Señorque yo te responderé.//CORO//En el tiempo de gozo,en el tiempo de dolorclama a mí dice El Señorque yo te responderé./// /Cuando sientas el hambrey no tienes qué comer clama a mí dice El Señorque yo te responderé.////Cuando te sientas enfermoen tu lecho de dolorel Señor te da las fuerzasy te da nueva salud.//', 'blog-imagen-7.jpg', 'Profecía', 'Adoración, Alabanza, Fe, Vida, Amor, Plenitud');
     INSERT INTO 
    articulos (id_articulo, titulo, extracto, fecha, texto, thumb, categoria, keywords)
     VALUES ('8', '¿Quién le enseño música al Rey David?', 'En la época de David todavía no se habían inventado las notas musicales. Fue hasta el siglo X de nuestra era, cuando el italiano Guido d’Arezzo inventó el sistema con las 7 notas musicales que hoy conocemos. Sin embargo es curioso que la Biblia diga que David era músico Los sacerdotes estaban de pie en sus puestos. Los levitas tocaban los instrumentos musicales que el rey David había hecho para alabar al SEÑOR, y con los cuales cantaba: «Su gran amor perdura para siempre.» Los sacerdotes tocaban las trompetas frente a los levitas, y todo Israel permanecía de pie (2 Crónicas 7:6).', current_timestamp(), 'En la época de David todavía no se habían inventado las notas musicales. Fue hasta el siglo X de nuestra era, cuando el italiano Guido d’Arezzo inventó el sistema con las 7 notas musicales que hoy conocemos. Sin embargo es curioso que la Biblia diga que David era músico Los sacerdotes estaban de pie en sus puestos. Los levitas tocaban los instrumentos musicales que el rey David había hecho para alabar al SEÑOR, y con los cuales cantaba: «Su gran amor perdura para siempre.» Los sacerdotes tocaban las trompetas frente a los levitas, y todo Israel permanecía de pie (2 Crónicas 7:6).

La Sra. Elena White dice al respecto:
<br><hr><br>
Los que eran testigos de esas extrañas exhibiciones de Saúl le recomendaron la música, por su influencia sedante sobre la mente cuando estaba así turbada. Por la providencia de Dios, le informaron sobre las habilidades musicales de David. . . Los hábiles arpegios de David sedaban el espíritu acongojado de Saúl. La influencia de los sublimes acordes de la que escuchaba, desvanece la melancolía que se había posado sobre él, y llevaba su mente excitada a un estado más feliz y racional (Spiritual Gifts, tomo 4, págs. 77- 79).
<br><hr><br>
El sencillo pastor entonaba los himnos que él mismo componía y con la música de su arpa acompañaba dulcemente la melodía de su voz fresca y juvenil. El Señor había elegido a David y encauzado su vida para que tuviera una oportunidad de educar su voz y desarrollar su talento para la música y la poesía. (Patriarcas y Profetas pág. 692)
<br><hr><br>
La juventud de David como pastor, con sus lecciones de humildad, de trabajo paciente y de cuidado tierno por los rebaños, la comunión con la naturaleza en la soledad de las colinas, que desarrolló su genio para la música y para la poesía, y dirigió sus pensamientos hacia su Creador; la prolongada disciplina de su vida en el desierto, que le hacían manifestar valor, fortaleza, paciencia y fe en Dios, habían sido cosas de las que el Señor se valió en su preparación para ocupar el trono de Israel (Patriarcas y Profetas pág. 808).

<br><hr><br>
INSTRUMENTOS MUSICALES BÍBLICOS<br>

En la Biblia encontramos que la música ocupa un lugar importante veamos algunos de los instrumentos musicales que aparecen:

ARPA
<br><hr><br>

El arpa de la antigüedad no ha recibido en las traducciones de la Biblia su debido nombre. Las arpas se usaban comúnmente en Mesopotamia y en Egipto desde tiempos muy remotos. La más antigua representación de un arpa, un instrumento de once cuerdas, aparece en un relieve de piedra de Lagash (Baja Mesopotamia), que data de antes del año 2000 AC. Las arpas mesopotámicas tenían la caja de resonancia en su parte
<br><hr><br>
superior, como lo indica la imagen, o en su Parte inferior, donde lo tenían todas las arpas egipcias. Por lo general, las arpas egipcias eran tan grandes que el músico debía apoyarlas en el suelo para tocarlas. El instrumento musical bíblico que puede compararse con las arpas de Egipto o de Mesopotamia es el que la Biblia hebrea llama nébel.
<br><hr><br>
TAMBOR<br>



Ciertamente, en el AT no aparece la palabra tambor. Sin embargo la palabra hebrea tof, que está 16 veces en el hebreo y que la RVR traduce como pandero, tamboril y tamborín, representa en verdad un tamborcito de mano. Ese tambor estaba hecho de un aro de madera y muy probablemente de dos cueros, sin ningún tipo de sonajero o cascabel, ni se usaban baquetas para tocarlo. En el Talmud se afirma que los cueros eran de carnero o de cabras silvestres. Era un instrumento tocado mayormente por las mujeres, pero en algunas ocasiones también era tocado por hombres. Se lo golpeaba con las manos y el sonido debe haber sido similar al de cualquiera de los tambores pequeños que hoy se tocan con la mano. Se lo usaba para acompañar el canto y la danza, y para acentuar el ritmo.

<br><hr><br>
CÍMBALOS La palabra címbalos, viene del griego kúmbala, vocablo que usa la LXX para traducir las palabras hebreas tseltselim, que aparece tres veces en el AT, y metsiltáyim, que se usa 13 veces en crónicas, Esdras y Nehemías. Ambos vocablos vienen del verbo tsalal, batir, golpear, retiñir, sonar. El verbo en sí es onomatopéyico y sugiere el sonido producido por el instrumento. En Sal. 150: 5 se distingue entre címbalos resonantes y címbalos de júbilo.
<br><hr><br>
SISTRO<br>

En la lista de instrumentos musicales que componían la orquesta de David en la memorable ocasión cuando se llevó el arca a Jerusalén (2 Sam. 6: 5), se menciona un tipo de instrumento que no figura en ningún otro pasaje bíblico. El sistro es un instrumento musical egipcio muy conocido. Tenía la forma de una herradura alargada, con orificios a los lados en los cuales se insertaban varillitas de metal dobladas en las puntas para que no se salieran. Estaba sujeto a un mango. Como los orificios eran más grandes que las varillitas, hacía un sonido como de sonajero cuando se lo sacudía (ver Lám. 3).


<br><hr><br>
LIRA<br>

La kíthara de los griegos y la cithara de los romanos era un tipo de lira. Las traducciones antiguas muestran que este instrumento, que la RVR llama arpa, era más bien una lira. La última duda en cuanto a esto desapareció cuando se descubrió que los egipcios llamaban kniniwr a la lira. Habían tomado la palabra del vocablo semítico kinnor.


<br><hr><br>
CITARA<br>

En los Salmos se menciona tres veces un instrumento llamado aÑor en hebreo. La RVR traduce decacordio. No hay duda de que se trata de un instrumento de diez cuerdas, pues la palabra hebrea en cuestión significa básicamente diez. Pero hay diversas opiniones en cuanto a la forma exacta de este instrumento.


<br><hr><br>
FLAUTA<br>

Indudablemente los hebreos usaron la flauta, uno de los instrumentos musicales más antiguos representados en los monumentos egipcios. La palabra hebrea ugab, que aparece cuatro veces en el AT, parece designar ese instrumento. Según Gén. 4: 21, fue uno de los primeros instrumentos que el hombre inventó. La mayoría de los comentadores modernos concuerdan en que el ugab era una especie de flauta y que su nombre provenía del verbo agab, amar, pues la flauta es el instrumento de viento más relacionado con el amor.


<br><hr><br>
CUERNO<br>

El cuerno es el único instrumento musical de la antigüedad cuyo uso se conserva todavía en la religión judía (ver Lam. 20 y 21). Se hace el shofar calentando al vapor el cuerno del animal hasta que se ablanda se le puede dar la forma deseada. Aunque este detalle no se menciona ni en la Biblia ni en el Talmud, no puede haber duda de que la manera de formar el shofar era muy similar en la antigüedad a lo que es ahora. Al principio no tenía ninguna boquilla, pero en el Talmud se habla de que para anunciar el año nuevo se usaba un shofar cuya boquilla estaba recubierta de oro.

<br><hr><br>


Todas estas referencias de instrumentos musicales en la Biblia son muestra de que a pesar de que la invención de las notas musicales y el sistema de lenguaje musical que conocemos hoy no existían en los tiempos bíblicos. Dios capacitó y dio dones a aquellos que de todo corazón lo adoraran. La música debe ocupar un lugar importante en nuestra adoración a Dios.', 'blog-imagen-8.jpg', 'Historia', 'Historia, Biblia, Vida, Biografia, Fe, Bondad, Paz, Alma');
     INSERT INTO 
    articulos (id_articulo, titulo, extracto, fecha, texto, thumb, categoria, keywords)
     VALUES ('9', '¿POR QUÉ SOMOS UNA FAMILIA EN CRISTO?', 'La vida familiar en Cristo Jesús Señor nuestr y salvador de nuestra vida de la mano de satanas a causa del pecado, ver mas aqui', current_timestamp(), '¿En qué pensamos cuando pensamos en la iglesia local?

Usualmente, lo primero que viene a nuestras mentes al pensar sobre algo es sumamente importante, define, a grandes rasgos, lo que significa para nosotros.

Si me hubieran preguntado hace años que pensaba yo sobre la iglesia local, mi respuesta hubiera sido muy diferente, y creo que no hubiera respondido lo que hoy diría.
<br><hr><br>
Pensaba en la iglesia como un montón de creyentes que buscaban experimentar a Dios individualmente. Siendo guiados hacia eso por “líderes ungidos” que ya habían alcanzado esa cima espiritual. ¿Te suena familiar? No lo sé, pero así miraba yo la iglesia, yo buscaba ser uno de esos “ungidos” y que la gente venga hacia mí a buscar “poder de Dios” para que fueran sanadas de enfermedades o “nuevas revelaciones” sobre cómo ser prosperadas económicamente. Pero gracias a Dios me abrió los ojos a su Palabra con el pasar de los años y mi entendimiento de la iglesia local ha cambiado radicalmente.
<br><hr><br>
Hoy, mi respuesta es esta: “somos una familia”.<br>

¿Qué cosas caracterizan a una familia?<br>
El amor, la dependencia, el perdón, la entrega, la aceptación, el aprendizaje, la aprobación, la disciplina… sufrimos juntos, lloramos juntos, nos alegramos juntos.
<br><hr><br>
Una familia no deja de ser una familia, una familia no puede ser disuelta, los padres siempre serán padres, sus hijos siempre serán sus hijos, los hermanos siempre serán hermanos, los lazos de sangre son tan fuertes que jamás podrán ser disueltos.
<br><hr><br>
¿Acaso esto no es lo mismo que sucede en una iglesia local? ¿No nos cubre acaso la misma sangre de Cristo?
<br><hr><br>
Mis padres se separaron el mismo año que yo conocí al Señor, mejor dicho, que el Señor me alcanzó en su gracia. Mi concepto de familia estaba distorsionado o desfigurado por el pecado. Como dice Romanos 12, tuve que renovar mi entendimiento con la Palabra para poder entender cuál es la voluntad de Dios con respecto a la familia. Ahora bien, ¿cómo es esto de que la iglesia local es una familia también?
<br><hr><br>
Miembros de un solo cuerpo
Cuando Pablo escribe la carta a los gálatas, nosotros podemos ver en el capítulo 6, que el apóstol utiliza el término “familia” para referirse a los creyentes de la iglesia local.
<br><hr><br>
Él dice: “Así que entonces, hagamos bien a todos según tengamos oportunidad, y especialmente a los de la familia de la fe” (Gál. 6:10).
<br><hr><br>
La unidad con la que la Palabra de Dios identifica a los creyentes es muy evidente en las figuras que se utilizan para respresentar a la iglesia, pensemos por ejemplo en el término “el cuerpo de Cristo”. Veamos en 1 Corintios 12:12-13:
<br><hr><br>
“Porque así como el cuerpo es uno, y tiene muchos miembros, pero todos los miembros del cuerpo, aunque son muchos, constituyen un solo cuerpo, así también es Cristo. Pues por un mismo Espíritu todos fuimos bautizados en un solo cuerpo, ya judíos o griegos, ya esclavos o libres, y a todos se nos dio a beber del mismo Espíritu”
<br><hr><br>
¿Quién obró en los creyentes esta unidad tan profunda? Dios, el Espíritu Santo. Él nos bautizó en un solo cuerpo, nos hizo a todos parte del cuerpo de Cristo en una inseparable unidad e interdependencia.
<br><hr><br>
La dependencia es otra de las características de una familia, y es una de las características de la familia de la fe que es la iglesia local:
<br><hr><br>
“Y el ojo no puede decir a la mano: No te necesito; ni tampoco la cabeza a los pies: No os necesito. Por el contrario, la verdad es que los miembros del cuerpo que parecen ser los más débiles, son los más necesarios; y las partes del cuerpo que estimamos menos honrosas, a éstas las vestimos con más honra; de manera que las partes que consideramos más íntimas, reciben un trato más honroso, ya que nuestras partes presentables no lo necesitan. Mas así formó Dios el cuerpo, dando mayor honra a la parte que carecía de ella, a fin de que en el cuerpo no haya división, sino que los miembros tengan el mismo cuidado unos por otros”
<br><hr><br>
Nos necesitamos los unos a los otros y es una maravillosa y humillante verdad. Yo no puedo vivir mi vida cristiana sin mi hermano, y él no la puede vivir sin mi, fuimos creados para funcionar juntos, fuimos unidos por el mismo Espíritu al mismo cuerpo, debemos cuidarnos y servirnos mutuamente. Cuidarnos los unos a los otros en la iglesia local es la voluntad de Dios.
<br><hr><br>
Somos un cuerpo y nos identificamos entre nosotros: “Y si un miembro sufre, todos los miembros sufren con él; y si un miembro es honrado, todos los miembros se regocijan con él”. El dolor de mi hermano no es ajeno a mi, ni mi dolor es ajeno a mi hermano. ¿Dónde estamos cuando un miembro sufre? Santiago 2:15-16 dice:
<br><hr><br>
“Si un hermano o una hermana no tienen ropa y carecen del sustento diario, y uno de vosotros les dice: Id en paz, calentaos y saciaos, pero no les dais lo necesario para su cuerpo, ¿de qué sirve?”
<br><hr><br>
El amor de la familia de la fe debe ser aún mayor que el de una familia biológica, si un padre no le negaría a su hijo alimento o ropa, ¿tenemos excusa para negarle ayuda a un hermano?
<br><hr><br>
El perfume de Cristo
El aroma que une a todo esto es el amor. ¿Recuerdan cuales son los dos mas grandes mandamientos? En una ocasión reunidos los fariseos, uno de ellos le pregunta a Cristo cuál es el gran mandamiento de la ley, a lo que Jesús responde:
<br><hr><br>
“Y El le dijo: AMARAS AL SEÑOR TU DIOS CON TODO TU CORAZON, Y CON TODA TU ALMA, Y CON TODA TU MENTE. Este es el grande y el primer mandamiento. Y el segundo es semejante a éste: AMARAS A TU PROJIMO COMO A TI MISMO. De estos dos mandamientos dependen toda la ley y los profetas”
<br><hr><br>
Ama a Dios y ama a tu prójimo. Si amas a Dios entonces estás amando a tu prójimo, si no amas a tu prójimo… ¿cómo puedes estar amando a Dios? Podría citar muchos pasajes de las cartas del apóstol Juan sobre la relación entre el amor a Dios y el amor a nuestros hermanos como interconectados, interrelacionados y dependientes uno del otro. No existe uno sin el otro.
<br><hr><br>
¿De qué manera se manifiesta nuestro amor por nuestra familia de la fe? ¿somos de los que en palabras se identifican con la necesidad pero de hecho no hacen nada? El apóstol Juan nos exhorta grandemente:
<br><hr><br>
“Pero el que tiene bienes de este mundo, y ve a su hermano en necesidad y cierra su corazón contra él, ¿cómo puede morar el amor de Dios en él? Hijos, no amemos de palabra ni de lengua, sino de hecho y en verdad” (1 Jn. 3:17-18)
<br><hr><br>
¡ZAZ! Muchos despertamos con una exhortación tan cruda y directa, pero llena de amor real. ¿De qué manera amas a tus hermanos en tu familia de la fe? ¡Es un gran desafío amar!
<br><hr><br>
En la cultura donde vivimos esto es tremendamente contracultural, cuando lo que se busca normalmente es mi satisfacción individual e inmediata, pensar en amar a otros como el centro de nuestra vida es una locura.
<br><hr><br>
Bien, pues los dos mayores amores que tenemos que tener no tienen que ver con amarnos a nosotros mismos.
<br><hr><br>
¿Cuál es la mayor medida de amor que vemos en la Escritura? Sí, el sacrificio de Cristo muriendo en la cruz por nuestros pecados. Cristo dio su vida por amor. No tan solo murió sino que vivió toda su vida en un amor perfecto por Dios y por su prójimo. Y murió como un vil pecador en nuestro lugar.
<br><hr><br>
Ahí vemos una gran muestra de amor por nosotros, y déjame decirte algo, esa es la medida de amor que Dios espera que tengamos por los hermanos de nuestra iglesia local, nuestra familia de la fe. Mira conmigo este pasaje por un momento:
<br><hr><br>
“En esto conocemos el amor: en que Él puso su vida por nosotros; también nosotros debemos poner nuestras vidas por los hermanos” (1 Jn. 3:16)
<br><hr><br>
Esto me deja en silencio, no puedo decir nada, no puedo objetar nada, ni excusarme… me lleva al arrepentimiento, porque la realidad es: ¡no siempre amamos con tal amor! Y a veces menos en nuestra iglesia local.
<br><hr><br>
Nuestra verdadera familia
¿Qué vemos al ver nuestra familia de la fe? ¿Vemos madres, padres, hermanos y hermanas allí? Pues hasta Cristo mismo se identificó con esa definición. En una ocasión cuando su madre y sus hermanos lo buscaban Él dijo con total seguridad y convicción:
<br><hr><br>
“Respondiéndoles El, dijo: ¿Quiénes son mi madre y mis hermanos? Y mirando en torno a los que estaban sentados en círculo, a su alrededor, dijo: He aquí mi madre y mis hermanos. Porque cualquiera que hace la voluntad de Dios, ése es mi hermano y hermana y madre” (Mc. 3:33-35)
<br><hr><br>
¿Quién? Cualquiera… que hace la voluntad de Dios. ¡Que declaración! Mira a los asientos que se llenan cada domingo, observa a aquellos ancianos que estan llegando, mira a los niños que juegan y hacen ruido, a las madres con sus bebés, a los hombres que conversan tomando un café… he aquí tu madre, tu padre, tus hermanos y hermanas. Los que hacen la voluntad de Dios, nuestro Padre. ¡Que familia Dios nos ha dado! ¡Amémosla!
<br><hr><br>
Una familia eterna por gracia
No quiero extenderme más, me apasiona, me quebranta, me humilla, ver cómo Dios nos ha bendecido al hacernos una familia de fe, una familia que se ama (Jn. 13:34; Ro. 12:10), que se enseña (Col. 3:16), que se soportan en amor (Col. 3:13; Ef. 4:2), que se perdonan como Dios los perdonó (Col. 3:13; Mt. 18:21-22), que se edifican mutuamente y se animan (1 Tes. 5:11; Ef. 4:29), que se exhortan unos a otros (Heb. 3:13), que se estimulan al amor y las buenas obras (Heb. 10:24), y podríamos seguir añadiendo más características de esta familia de fe. Y quisiera agregar algo más: que pecan.
<br><hr><br>
Porque tan cierto como es todo lo anterior, es tan cierto que aun mora el pecado en esta familia de fe, pero para eso hay perdón, hay gracia, hay disciplina, hay misericordia. Pero tenemos la buena noticia de que un día ya no habrá pecado en esta familia de fe, y eternamente estarán juntos adorando y sirviendo al Dios que los trasladó de las tinieblas a su luz admirable, al reino de su amado Hijo, y que los constituyó herederos, hijos adoptivos, y parte de su familia.
<br><hr><br>
¡Qué maravillosa familia Dios proveyó en la sangre de Cristo!', 'blog-imagen-9.jpg', 'Vida', 'Familia, Vida, Abundancia, Plenitud, Alegria, Gozo, Paz, paciencia, Esperanza');
     INSERT INTO 
    articulos (id_articulo, titulo, extracto, fecha, texto, thumb, categoria, keywords)
     VALUES ('10', '¿Qué dice la Biblia acerca de Satanás?', 'Satanás es una criatura horrible.  Es repugnante a la vista, con cuernos, cola, un tridente, etc.  Esta imagen de Satanás es con la que estamos más familiarizados. Sin embargo, si vemos lo que dice la Biblia acerca de él, vemos que nada podría estar más lejos de la verdad.', current_timestamp(), 'Satanás es una criatura horrible.  Es repugnante a la vista, con cuernos, cola, un tridente, etc.  Esta imagen de Satanás es con la que estamos más familiarizados. Sin embargo, si vemos lo que dice la Biblia acerca de él, vemos que nada podría estar más lejos de la verdad.
<br><hr><br>
De hecho, esta es una tergiversación muy peligrosa.  En Ezequiel 28: 12-19 tenemos una imagen real de Satanás. “Tú eras el sello de la perfección, lleno de sabiduría, y acabado de hermosura… Tú, querubín grande, protector, yo te puse en el santo monte de Dios… Perfecto eras en todos tus caminos desde el día que fuiste creado…”
<br><hr><br>
Esto no se parece en nada a la típica imagen de Satanás que muchas personas tienen. De hecho fue un querubín, pertenecía a la orden más alta de los ángeles. Se sentó en el cielo, un ser del más alto rango y de posición exaltada. Creado por Dios, acabado de hermosura.
<br><hr><br>
La caída de Satanás
Pero Satanás alejo sus ojos de su Creador y comenzó a admirar la creación; por sí mismo. “Corrompiste tu sabiduría a causa de tu esplendor.” (Ezequiel 28,17) Se volvió orgulloso y se exaltó a sí mismo, y el deseo de gobernar nació en él. Anhelaba él mismo sentarse en el lugar de Dios. Susurró mentiras hasta que tuvo a la tercera parte de los ejércitos celestiales de su lado.
<br><hr><br>
“¡Cómo caíste del cielo, oh Lucero, hijo de la mañana! Cortado fuiste por tierra, tú que debilitabas a las naciones. Tú que decías en tu corazón: Subiré al cielo; en lo alto, junto a las estrellas de Dios, levantaré mi trono, y en el monte del testimonio me sentaré, a los lados del norte; sobre las alturas de las nubes subiré, y seré semejante al Altísimo.” Isaías 14:12-15.
<br><hr><br>
El problema comenzó con este “yo haré”. Satanás se alejó de escuchar la voz de Dios y comenzó a buscar su propia voluntad. Poner otra voluntad sobre la voluntad de Dios es lo mismo que decir que la voluntad de Dios no es perfecta. Cuando Satanás dijo: “Yo haré”, el pecado comenzó. Dios se llama a sí mismo por nombre, “YO SOY”. (Éxodo 3:14) Él no da este nombre a nadie más. Quien quiera ser algo en sí mismo está por lo tanto en conflicto con Dios, y es expulsado.
<br><hr><br>
“Después hubo una gran batalla en el cielo: Miguel y sus ángeles luchaban contra el dragón; y luchaban el dragón y sus ángeles; pero no prevalecieron, ni se halló ya lugar para ellos en el cielo. Y fue lanzado fuera el gran dragón, la serpiente antigua, que se llama diablo y Satanás, el cual engaña al mundo entero; fue arrojado a la tierra, y sus ángeles fueron arrojados con él.” Apocalipsis 12:7-9.
<br><hr><br>
Satanás como el príncipe de este mundo
Así fue Satanás expulsado del cielo, y ahora nunca más debe ser cuestionada la absoluta bondad, sabiduría y amor de Dios. Debe ser demostrado que la voluntad de Dios es lo único bueno y perfecto. Por eso Satanás recibió dominio sobre la tierra, y su propósito es establecerse a sí mismo como el dios de este mundo. La tierra no está bajo el control directo de Dios, sino de Satanás, que recibió prácticamente carta blanca para hacer lo que quisiera. Jesús llama a Satanás “el príncipe de este mundo.” Juan 12:31. El Apóstol Pablo lo llama “el dios de este siglo.” 2 Corintios 4:4. Este es el plan de Dios para revelar completamente la falsedad y engaño del pecado. Debe demostrarse más allá de toda duda que el camino de Satanás sólo conduce a la muerte y destrucción.
<br><hr><br>
La mayor parte del mundo no está consciente que están “bajo el maligno.” 1 Juan 5:19. Satanás utiliza su orgullo inherente para que ellos se ocupen de sí mismos y su grandeza, y esto ha afectado todos los aspectos de la humanidad. Su meta es que los hombres estén tan seguros de sus habilidades humanas que prescindan de toda necesidad de Dios. Él no está interesado en hacer mal al mundo, solamente llevarlos a todos bajo su dominio. Todavía susurra sus mentiras en cada oreja, y siembra orgullo y duda, de igual forma que hizo mientras estuvo en el cielo.
<br><hr><br>
Los adversarios de Satanás
Igualmente Dios extiende la mano e impide que Satanás lleve a cabo sus planes por completo. Envió a Jesús para abrir un nuevo camino que la humanidad pudiera seguir. Sobre toda la tierra se encuentran personas que han renunciado a su propia voluntad para seguir a su Salvador, y que creen en la perfecta voluntad de Dios. Estas almas fieles juntas forman la Iglesia de Dios. Este grupo es la espina en el ojo de Satanás. Él trabaja para introducir duda, orgullo, división, o lo que sea para alejar el corazón de los hombres de Dios.
<br><hr><br>
“Sed sobrios, y velad; porque vuestro adversario el diablo, como león rugiente, anda alrededor buscando a quien devorar.” 1 Pedro 5:8. Él busca desesperadamente; quiere tener control completo sobre esta tierra, y ataca donde sea para llevar a cabo su plan. Pero para todos aquellos que tienen un corazón para Dios, es posible resistirlo.
<br><hr><br>
“Por lo demás, hermanos míos, fortaleceos en el Señor, y en el poder de su fuerza… Por tanto, tomad toda la armadura de Dios, para que podáis resistir en el día malo, y habiendo acabado todo, estar firmes.” Efesios 6: 10-17.
<br><hr><br>
Debido a este poder que está disponible, es posible encontrar hombres en todo el mundo que se oponen al engaño de Satanás, que vencen sobre el pecado, y que brillan como una luz en este mundo oscuro y malo. Estos son los que a través de su fidelidad demuestran que el camino de Dios es perfecto, mientras que el resto de la humanidad demuestra que el camino de Satanás, este orgulloso “yo haré”, sólo lleva a la destrucción. Cuando este mundo haya pasado, será la voluntad de Dios lo que permanecerá por toda la eternidad. Satanás, el gran engañador, será finalmente lanzado en el lago de fuego por los siglos de los siglos.” Apocalipsis 20:10″', 'blog-imagen-10.jpg', 'Historia', 'Historia, Angel caido, condenado, oportunida, vivos');
     INSERT INTO 
    articulos (id_articulo, titulo, extracto, fecha, texto, thumb, categoria, keywords)
     VALUES ('11', 'LA ETERNIDAD', 'La eternidad desafía la imaginación y la comprensión del hombre. No es un objeto, ni lugar; ni período de tiempo. No tiene principio y no tiene fin. Toda la humanidad desde Adán se encontrará en ella.', current_timestamp(), 'La eternidad desafía la imaginación y la comprensión del hombre. No es un objeto, ni lugar; ni período de tiempo. No tiene principio y no tiene fin. Toda la humanidad desde Adán se encontrará en ella.
<br><hr><br>
La palabra eternidad se encuentra en Isaías 57:15, donde dice que Dios habita la eternidad. Él es eterno sin principio y sin fin. Esto sólo se puede decir de Dios. El hombre tiene un principio pero su alma no tiene fin. El diccionario afirma que la eternidad es un tiempo que no tiene principio y no tendrá fin. En ella entra el alma al tiempo de la muerte y allí permanece siempre y para siempre. La Biblia principia con estas palabras: En el principio creó Dios los cielos y la tierra (Génesis 1:1). Allí se refiere a la creación del cielo y la tierra y todas las cosas que en ellos hay (Colosenses 1:16-17). Dios ha decretado que todas estas cosas dejarán de existir: los cielos pasarán con grande estruendo, y los elementos ardiendo serán desechos, y la tierra y las obras que en ella hay serán quemadas (2 Pedro 3:10).
<br><hr><br>
El hombre es una criatura que se relaciona con el correr de tiempo. El hombre es usuario del tiempo, y confía en él. Su vida, es controlada por el tiempo. El tiempo, por importante que sea, no tiene ninguna relación con la eternidad. La eternidad es incomparable. No tiene largura, anchura, profundidad ni altura que se puede medir. La eternidad no ofrecerá oportunidad para cambiar el destino eterno que fue escogido en la vida. Es para siempre y sin cambio.
<br><hr><br>
El hombre es el único de todas las criaturas y de las cosas creadas, que estará vestido de un cuerpo inmortal, y hará el cambio de este tiempo a la eternidad. El hombre es la úniса criatura que tiene el aliento de vida (Génesis 2:7), y como Dios vivirá para siempre.
<br><hr><br>
Cuando termine el tiempo, la eternidad revelará muchas maravillas y milagros, eventos y desarrollos que no se pueden entender en el día de hoy. Cuando el Señor volverá otra vez, todo ojo le verá (Apocalipsis 1:7). Él se sentará sobre su trono y todas las naciones serán reunidas delante de Él en juicio (Mateo 25:31-32; 2 Corintios 5:10). Allí Dios juzgará cada hombre por las cosas que están escritas en los libros según sus obras (Apocalipsis 20:12-13).
<br><hr><br>
El incrédulo no cree estas verdades. Todo ojo, es decir, los billones de la tierra y del mar, los muertos que resucitarán, así como los vivos, lo verán. La mente se conturba al pensar que todas las naciones se reunirán en un solo grupo ante el trono de juicio. Los incrédulos se fijarán que el tiempo habrá pasado y que la eternidad no tiene limitaciones. Las restricciones de distancia y de tiempo que se encuentran en esta vida terrenal, son ausentes en la eternidad.
<br><hr><br>
La eternidad, según lo revela la Biblia, tiene tres aspectos: El juicio, la separación de los justos y los injustos, y lo eterno. Este juicio será final, sin apelaciones ni revista de juicio. Durante la vida del hombre, Dios pone delante de él el bien y el mal, queriendo conducirlo a una relación íntima con su creador. Aquellos que no prestan atención, en el juicio final recibirán su sentencia y serán enviados a un castigo eterno. Los que se rinden a Dios durante la vida, tienen sus pecados juzgados antes de que venga el día del juicio final, mientras que los que no se rinden, tendrán sus pecados descubiertos después en el juicio final (1 Timoteo 5:24).
<br><hr><br>
Después del juicio todo hombre será recompensado según las cosas que están escritas en los libros. Aquellos cuyos nombres están escritos en el libro de la vida recibirán su recompensa también (Apocalipsis 20:12). La palabra recompensa que se menciona aquí será una recompensa por todos los hechos cometidos, ya sean buenos o malos.
<br><hr><br>
En la eternidad solamente habrá dos clases de gente, los salvos y los perdidos. Dios los juzgará según como aceptaron o rechazaron el plan de la salvación. Hay solamente dos destinos en la eternidad para toda la gente, el cielo para los salvos y el infierno para los perdidos.
<br><hr><br>
El Juez eterno dirá a aquellos, cuyos nombres están escritos en el libro de la vida: Venid benditos... heredad el reino preparado para vosotros desde la fundación del mundo (Mateo 25:34); y a aquellos cuyos nombres no están escritos en el libro de la vida el Juez dirá: Apartaos de mí, malditos, al fuego eterno preparado para el diablo y sus ángeles (Mateo 25:41). Estas palabras serán espantosas para algunos, pero otros ya lo sabrán. Aquellos que pasan de este tiempo a la eternidad habiéndose preparado para encontrarse con Dios, mueren con la confianza en su corazón que estarán con el Señor en la eternidad. Estos esperan oír las palabras benditas: Venid, benditos.
<br><hr><br>
También hay aquellos que están condenados en la vida y pasan a la eternidad sin estar preparados para encontrarse con Dios. Estos con horror esperan el juicio (Hebreos 10:27). En aquel gran día clamarán a las montañas y a las peñas: Caed sobre nosotros, y escondednos del rostro de aquel que está sentado sobre el trono, y de la ira del Cordero (Apocalipsis 6:16).
<br><hr><br>
Entre aquella inmensa multitud también se encontrarán los engañados: Muchos me dirán en aquel día: Señor, Señor, ¿no profetizamos en tu nombre, y en tu nombre echamos fuera demonios, y en tu nombre hicimos muchos milagros? Y entonces les declararé: Nunca os conocí; apartaos de mí, hacedores de maldad (Mateo 7:22-23).
<br><hr><br>
La Biblia no nos dice en detalle todo lo que la eternidad contiene para los seres inmortales. Empero, Jesús nos dijo que los que vencerán estarán sentados con Él en su trono (Apocalipsis 3:21). Estos también estarán vestidos de blanco, y no les faltará nada (Apocalipsis 7:14-17). Estos se gozarán de toda bendición preparada para las almas inmortales.
<br><hr><br>
Aquellos a quienes el Juez dirá: apartaos de mi, irán a las tinieblas de afuera con lloro y crujir de dientes (Mateo 8:12); irán al fuego del infierno que no se apagará (Marcos 9:43), y tendrán su parte en el lago de fuego y azufre (Apocalipsis 20:15; 21:8). Estas almas estarán alertas mentalmente y se conocerán (Lucas 16:23); sentirán los tormentos del infierno (Lucas 16:24); entenderán (Lucas 16:26); se acordarán de la vida terrenal (Lucas 16:28). La eternidad no tendrá ningún beneficio para los perdidos.
<br><hr><br>
En la eternidad Satanás, aquel antigua dragón, será completamente y eternamente derrotado, y será castigado conforme a su maldad. El infierno fue preparado principalmente para este propósito (Mateo 25:41). ¡Qué destino tan horrible de estar en ese lugar de tormento con un ser tan espantoso y can todos sus malos espíritus condenados!
<br><hr><br>
El tercer aspecto de la eternidad, la finalidad, es incomprensible para el entendimiento humano. La mente del hombre es limitada a principios y a fines. A consecuencia de esto, al hombre le es necesario confiar en las verdades de la palabra de Dios. Dios es el autor de todas las cosas y también de la eternidad.
<br><hr><br>
Si fuera posible que un ave cogiera un grano de arena y la llevara a la luna y así, al fin, de esta manera removiera cada granito de la tierra; la eternidad apenas habría comenzado, y no estaría más cerca el fin. Para los malos, el pensamiento de una eternidad sin fin, es lo más penoso posible. Para los justos, que estarán gozando la dicha eterna con Dios y con todos los santos ángeles, es un pensamiento muy placentero.
<br><hr><br>
Ahora mientras que haya tiempo, podemos escoger nuestro destino eterno.
<br><hr><br>
Amado lector, ¿estás preparado para la eternidad? Esta pregunta requiere tu contestación en esta vida. Hoy es el tiempo de preparar para la eternidad.
<br><hr><br>
Uno se prepara para esta gran reunión por medio de aceptar a Cristo Jesús como el Salvador de la humanidad, que murió en la cruz del Calvario por los pecados del hombre y que resucitó para su justificación (Romanos 4:25). Esta decisión debe incluir más que solamente una aprobación mental; debe ser un asunto del corazón, una completa entrega a Dios. Así uno llega a ser seguidor de Jesús, que anda con Él, obedece sus enseñanzas y es guiado por el Espíritu Santo.
<br><hr><br>
El no recibir a Cristo resultará en el rechazo eterno de Dios. La vida es muy insegura; la muerte es muy segura; la eternidad es demasiada larga; ¡no demores más! ¡Ahora se debe aceptar la palabra de Dios!
<br><hr><br>
¿Dónde Vas a Pasar La Eternidad?<br>

La morada eterna, ¿Dónde puede estar?<br>
¿Vuela en el aire, O flota en la mar?<br>
¿Entre el tumulto, Allí estará?<br>
¿O envuelto en silencio, Su eco se oirá?<br>
<br><hr><br>
¿Con amados en gloria, La vas a pasar?<br>
¿O con los demonios, En tinieblas llorar?<br>
Si no con el uno, Con el otro será.<br>
Sin fin sin remedio; ¡Destina final!<br>
<br><hr><br>
Eternidad, mi amigo; ¡Ya no duermas más!<br>
Ni tomes del mundo, Consejo falaz.<br>
La pregunta persiste, Solemne y sagaz:<br>
La morada eterna, ¿Dónde la pasarás?<br>

', 'blog-imagen-11.jpg', 'Profecía', 'Vida, Eternidad, Fe, Amor, Bondad, Claridad, Gozo, Felicidad, Perfecto, Luz, Rey, Santos, Hermanos');
     INSERT INTO 
    articulos (id_articulo, titulo, extracto, fecha, texto, thumb, categoria, keywords)
     VALUES ('12', 'JESÚS PAGÓ EL PRECIO – Mateo 20:28', 'Jesús pagó el precio por nuestros pecados a causa de Su obediencia a Su Padre y Su increíble amor por nosotros. 
<br>
“El Hijo del Hombre no vino para ser servido, sino para servir, y para dar Su vida en rescate por muchos.” (Mateo 20:28) ', current_timestamp(), 'Jesús pagó el precio por nuestros pecados a causa de Su obediencia a Su Padre y Su increíble amor por nosotros. 
<br><br>
“El Hijo del Hombre no vino para ser servido, sino para servir, y para dar Su vida en rescate por muchos.” (Mateo 20:28) 
<br><br>
¿Alguna vez has pensado en la realidad de que Jesucristo es el Creador de este mundo? 
<br>
Las Sagradas Escrituras nos dicen que: “En el principio era el Verbo;. . . Todas las cosas por Él fueron hechas;. . . y el mundo fue hecho por Él, y el mundo no le conoció.” (Juan 1:1, 1:3, 1:10) 
<br>
Romanos 11:36 repite el mismo mensaje: ¡Todo en el cielo y la tierra fue creado por Él y para Él! 
<br>
Y en el último libro de la Biblia, Jesucristo es llamado “el Principio de la creación de Dios.” (Apocalipsis 3:14) 
<br><br>
Jesucristo no sólo es el Creador del mundo, pero Él es también nuestro Salvador, que vino a redimir a los pecadores perdidos de una prisión eterna en el infierno, que ocurrió cuando Adán y Eva pecaron y fueron expulsados ​​del Jardín de Edén, y fueron separados de la increíble comunión que tenían con el Señor. 
<br><br>
Tenemos que entender que Dios anhela tener una relación in-interrumpida con los hombres, por lo que envió a Su único Hijo para dar Su vida en rescate por el hombre, para que todo aquel que acepta el don gratuito del perdón eterno puede tener su relación con Dios restaurada. 
<br><br>
La Palabra nos dice que: “Como bien saben, ustedes fueron rescatados de la vida absurda que heredaron de sus antepasados. El precio de su rescate no se pagó con cosas perecederas, como el oro o la plata, 19 sino con la preciosa sangre de Cristo…” (1 Pedro 1:18-19). En el Antiguo Testamento, los rescates fueron pagados por diversas razones, tales como liberar esclavos y en el Nuevo Testamento Jesús pagó el precio del rescate de la esclavitud al pecado. 
<br><br>
Oseas escribió sobre el rescate que presagió lo que Jesús haría por nosotros. “Lo haré libraré del poder de la tumba y los redimiré de la muerte.” (Oseas 13:14) 
<br>
Así que ¿a quién pagó Cristo el rescate? Jesús vino a esta tierra como un bebé y Él estuvo con nosotros durante 33 años y medio, donde enseñó y realizó muchos milagros y finalmente se fue a la cruz para dar Su vida en rescate por muchos. Tenemos que entender que Jesucristo fue obediente hasta la muerte y pagó el rescate por nuestros pecados a Su Padre. (Juan 3:16) 
<br><br>
En el Antiguo Testamento, los rescates se habían pagado en parte “por la sangre de machos cabríos y de becerros” ofrecidos en el altar como una cubierta temporal por los pecados. Pero eso fue sólo hasta que el verdadero rescate podría ser pagado: “¿Cuánto más la sangre de Cristo, quien por el Espíritu eterno El mismo se ofreció sin mancha a Dios, purificará nuestra conciencia de obras muertas para servir al Dios vivo?” (Hebreos 9:14) 
<br>
Cuando pecamos intencionalmente, lo que significa que nuestra mente nos dice que no debemos hacerlo y lo hacemos de todos modos, estamos deliberadamente pisoteando la sangre del pacto de Cristo. Por lo tanto, tenemos que estar conscientes de lo que la Biblia nos ADVIERTE: ¿Cuánto mayor castigo piensan ustedes que merecerá el que ha pisoteado bajo sus pies al Hijo de Dios, y ha tenido por inmunda la sangre del pacto por la cual fue santificado, y ha ultrajado al Espíritu de gracia?” (Hebreos 10:29) 
<br><br>
Si usted tiene un problema con el consumo de alcohol, uso de drogas, la pornografía, y siempre miente o lo que sea; ponte de rodillas y pídele a Dios que te perdone a través de la preciosa sangre derramada de Su Hijo. Pídele que te dé fuerzas para vencer el pecado y Él es fiel para hacer eso, pero usted debe estar dispuesto a hacer su parte también. 
<br><br>
“De modo que si alguno está en Cristo, nueva criatura (nueva creación) es; las cosas viejas pasaron, ahora han sido hechas nuevas.” (2 Corintios 5:17) 
<br>
La verdadera salvación siempre trae una transformación espiritual. 
<br>
Recuerda esto, tenemos que caminar cerca del Señor en cada momento de nuestras vidas y aún más cuando nos estamos hundiendo y el enemigo nos está dominando. “Busquen al Señor y Su fortaleza; Busquen Su rostro continuamente.“ (1 Crónicas 16:11) 
<br><br>
Mantenga su mente fija en Jesús y memorice este versículo hermoso y alentador: “No temas, porque Yo estoy contigo; No te desalientes, porque Yo soy tu Dios. Te fortaleceré, ciertamente te ayudaré, Sí, te sostendré con la diestra de Mi justicia.” (Isaías 41:10) 
<br>
Y recuerda lo que Pablo dijo a los Filipenses: “Todo lo puedo en Cristo que me fortalece.” (Filipenses 4:13) 
<br>
La obra de Dios en nosotros no termina cuando recibimos la salvación, simplemente acaba de empezar.

', 'blog-imagen-12.jpg', 'Fe', 'Salvación, Plenitud, Arrepentimiento, Pecado, Vida, Nuevo, Cambio');






     INSERT INTO metadatos (id_metadato, id_pagina, titulo, descripcion, keywords, link) VALUES ('1', 'inicio', 'veil - blog | artículos de calidad sobre la fe y la bondad', 'en este lugar hallara vida y vida en abundancia, para el bien de tu familia y la tuya, siguenos para saber más. Mas acerca de esto Aqui, mas acerca de la bondad del Señor Dios todopoderoso', 'Vida, Fe, Valentía, Profecía, Gracia, alabanza, bondad', '');

     

    ";
    $statement = $conexion -> prepare($insertarArticulos);
    $statement -> execute();


    $insertarPaginas = "INSERT INTO paginas (id_pagina, titulo, descripcion, descripcion_larga, keywords, thumb, link) VALUES ('1', 'VEILBLOG', 'caminando con Dios', 'Este es un lugar donde moraremos todo juntos caminando con el Señor Dios todopoderoso, apartado del mal, temeroso de Dios, recto y perfecto en el Señor Jesús.', 'vida, fe, categorías, generales', 'blog-imagen-1.jpg', '".RUTA."');

     INSERT INTO paginas (id_pagina, titulo, descripcion, descripcion_larga, keywords, thumb, link) VALUES ('2', 'acerca', 'Hola, soy un Diseñador freelancer este es mi perfil aquí encontraras todo tipo de contenido relacionado al diseño y desarrollo web que constantemente estaré subiendo contenidos de interés para todo aquel que esta empezando en este mundo del desarrollo y diseño web.', 'La vida es mucho mejor y abundante felicidad teniendo como base a las enseñanzas de Jesús el Hijo de Dios, soy un seguidor de cristo y quiero ayudarlos a descubrir cómo encontré yo la verdad que es escondida para el mundo, también aprenderemos cómo ver manifiestas los misterios que están ocultas para este mundo y quienes pueden obtener toda esta verdad 100% comprobadas, entre muchas cosas de la palabra aprendida de Jesus, cristo vive y reina alabado sea el Señor, además aprendendemos como honrar al Dios Padre, y muchas cosas más sobre estas maravillas que no te habías enterado hasta ahora.
', 'Fe, Profecía, Amor, Esperanza', 'foto.jpg', 'acerca.php');
     INSERT INTO paginas (id_pagina, titulo, descripcion, descripcion_larga, keywords, thumb, link) VALUES ('3', 'contacto', 'Estamos para servirle envíanos un mensaje a través de este formulario y estaremos ayudando en todo lo que podamos hacerlo.
', 'Tenemos las mejores operadoras que resolverán sus problemas con gran eficiencia por favor contáctenos si tiene alguna duda o pregunta, estamos para resolver todo aquello que usted se pregunta, gracias por confiar en nosotros, esta usted en buenas manos, Dios le bendiga
', 'contacto, veil, blog, veilblog, mas, mas', 'blog-imagen-4.jpg', 'soporte@veil.ml');
     INSERT INTO paginas (id_pagina, titulo, descripcion, descripcion_larga, keywords, thumb, link) VALUES ('4', 'sociales', 'https://web.facebook.com/veilsman', 'veilsman', 'https://twitter.com/veilsman', 'thumb', 'https://youtube.com/veilsman');";
    $statement = $conexion -> prepare($insertarPaginas);
    $statement -> execute();


?>