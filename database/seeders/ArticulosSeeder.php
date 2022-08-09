<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticulosSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('articulos')->insert([
            [
                'articulo_id' => 1,
                'titulo' => 'Maquillaje vegano para llevar en el bolso',
                'fecha_publicacion'=> '2021-10-08',
                'contenido' => 'Sabéis que tengo casi un máster en eso de llevar «porsiacasos» en el bolso o en la guantera del coche, así que todos los envases pequeñitos que además se apliquen de forma fácil, son bienvenidos siempre.

                                Pero además, cada vez son más amigas las que me preguntan por productos de maquillaje para sus hijas adolescentes o millenials, y creo que esta gama de Clarins no debería pasar desapercibida: my Clarins.

                                Lo tiene todo: un tamaño ideal para llevar en el bolso, precios asequibles y un cóctel de activos muy interesante:

                                    * El aceite de nuez de coco (con propiedades nutrientes y protectoras).
                                    * El aceite de arándano rojo (que proporciona nutrición y confort a los labios).
                                    * La manteca de cacao bio (con propiedades nutritivas).
                                    * El extracto de baja de goji bio (potencia la energía de la piel).

                                    MY LOVELY GLOSS (18,00 €)',
                'imagen_contenido' => '1633986256.jpg',
                'imagen_portada' => '1633986256.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'articulo_id' => 2,
                'titulo' => 'CUIDA TU PIEL MIENTRAS TE MAQUILLAS ¡CON LECHE!',
                'fecha_publicacion'=> '2021-10-09',
                'contenido' => 'Pocas veces, por no decir ninguna, he copiado el título de una nota de prensa pero es que este resume a la perfección el punto fuerte del último producto de Clarins que estoy probando hace semanas.

                    Clarins Milky BB Cream opinión
                    Os pongo en antecedentes: como ya conté en otro post e incluso confesamos en una charla con periodistas de belleza en ClubHouse, las BB Cream nunca habían sido «santo de mi devoción» hasta el confinamiento.

                    Soy fiel al maquillaje Teint Idôle de Lancôme desde hace años (eso no es ningún secreto) y puedo presumir de haberlo puesto a prueba incluso en una media maratón. Las BB Creams son maravillosas pero yo necesito cobertura y duración, que sabéis que mis jornadas suelen ser intensas y no soy muy de retocarme a mitad del día.

                    Hasta que llegó el confinamiento y llegaron las reuniones, cursos, conferencias y eventos online que hacen que tenga que maquillarme a diario pero que al estar en casa no requiere un maquillaje de larga duración (que por supuesto sigo utilizando cuando paso días fuera de casa o jornadas de cámaras y esas cosas).

                    Utilicé durante muchos meses una BB Cream de Beter, de precio muy asequible y resultado fantástico y ahora, estoy probando la nueva de Clarins (en dos tonos para ir mezclando según vayamos cogiendo color en la cara).

                    No había leído la nota de prensa así que no sabía que estaba formulada con leche de melocotón pero sí note de inmediato más cobertura y sobre todo MÁS HIDRATACIÓN. La piel queda jugosa, fresca, y muy luminosa.

                    Clarins Milky BB Cream
                    Pero esto no lo es todo: además de un aroma a melocotón absolutamente delicioso, esta BB Cream cuida la piel mientras la utilizas. Suaviza, nutre y deja la piel uniforme (por lo visto es gracias al Complex Light Optimizing de la marca que lleva nácares rosados y de polvos que llaman «soft-focus». Los primeros actúan sobre la luminosidad; y los segundos, sobre la uniformidad de la tez.',
                'imagen_contenido' => '',
                'imagen_portada' => '1633921580.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'articulo_id' => 3,
                'titulo' => 'PIEL CANELA DE E’LIFEXIR: ACELARA EL BRONCEADO Y CUIDA TU PIEL',
                'fecha_publicacion'=> '2021-10-10',
                'contenido' => 'Creo que este año vamos a saborear más el sol. De hecho, ya lo estamos haciendo.

                    No se trata sólo de ir a la playa o a la piscina. Creo que hemos aprendido a disfrutar más de estar al aire libre, de dejarnos acariciar por esos rayos de sol de última hora de la tarde (para mi, los más deliciosos) y de la luz que tanta energía nos da.

                    productos belleza sol e’lifexir opinion

                    Pero con la llegada del sol (y del calor extremo) también tenemos que empezar a pensar en proteger la piel y hoy os quiero hablar de varios productos de la marca E´lifexir que me han parecido interesantes.

                    PIEL CANELA, ACELERADOR DEL BRONCEADO (13,40 EUROS)
                    El primero es PIEL CANELA (el nombre ya suena a música celestial para las que somos blanquitas de piel).

                    productos belleza sol e’lifexir opinion

                    Si os digo que es un gel acelerador del bronceado, pensaréis que no va mucho conmigo, pero si os digo que además, ayuda a intensificar el tono dorado de la piel y a reparar las células dañadas por el sol, ya os encaja más.

                    Dicen que protege de los rayos UVA y UVB gracias a su SPF 15, pero esta parte prefiero no destacarla. Primero porque para mi un SPF15 es como no llevar nada y si estamos expuestas al sol en playa o piscina puede ser insufucuente. Me vale para un paseo o para el día a día, pero yo lo complemento con mínimo un SPF30 (casi siempre 50) que lo de la protección solar hay que tomarlo muy en serio.

                    Pero me gusta en cuanto a reparar, acelerar y por su delicioso aroma a vainilla y coco (mis dos olores favoritos) que te transportan al Caribe nada más aplicarlo.

                    Como acelerador del bronceado está  formulado con el exclusivo Tan Accelerator Complex:
                    • Extracto natural de Monohï de Tahití (certificado orgánico Ecocert), uno de los descubrimientos del verano pasado, que hidrata y suaviza la piel a la vez que contribuye a dar un bonito natural tono a la piel.
                    • Precursor biológico A. Tyrosine, que intensifica un 20% el bronceado al estimular la producción de melanina.
                    • Creatina, que protege, da firmeza a la piel y estimula el metabolismo energético celular hasta un 60%, produciendo colágeno y reparando los daños en el ADN celular (esto es lo que más me gusta).

                    Tiene un precio de 13,40 euros.

                    PIEL CANELA EN CÁPSULAS (21 EUROS)
                    productos belleza sol e’lifexir opinion

                    Preparar tu piel para el sol, protegerla y ayudar a reparar el envejecimiento celular, sonl as tres promesas de este nutricosmético, e’lifexir® Esenciall Piel Canela.
                    Contiene  todas estas cosas:
                    • Vitamina E, Selenio y Resveratrol, que ayudan a proteger las células frente al daño oxidativo.
                    • Zinc, que contribuye al buen estado de la piel y al normal mantenimiento de la visión.
                    • Extracto de Té Verde que, gracias a su acción antioxidante frente a la radiación UV, ayuda a reducir el envejecimiento celular
                    • Vitamina C, que contribuye a la formación de colágeno.
                    • Biotina, esencial para el buen estado de piel, cabello y uñas.
                    Yo, de momento, ya lo he añadido a mi rutina de «vitaminas en el desayuno».


                    E’LIFEXIR® BABY CARE
                    Y por último un protector solar que aunque vaya dirigido a niños también me gusta para mi: Baby Care con SPF 50+.

                    productos belleza sol e’lifexir opinion

                    Una crema solar, certificada por Ecocert, con filtros 100% minerales que protegen de las radiaciones UVA / UVB / IR-A y con 99.5% de activos naturales que, además, tratan y calman las pieles delicadas.

                    Además, es un producto hipoalergénico testado bajo control dermatológico y pediátrico. Protege la piel del bebé con filtros minerales de máxima tolerancia y Agua Frutal Antioxidante de Granada BIO.

                    Decía que trata y calma la piel gracias porque entre sus ingredientes de origen natural están el Bisabolol Orgánico y el Aceite de Caléndula BIO y la nutre e hidrata con los insaponificables del Aceite de Oliva y la Manteca Cacao Amazónico.

                    Así que con esto casi tenemos el kit familiar listo, ¿no os parece?',
                'imagen_contenido' => '',
                'imagen_portada' => '1633977916.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'articulo_id' => 4,
                'titulo' => 'COMO UNA CARICIA METIDA EN UN BOTE',
                'fecha_publicacion'=> '2021-10-11',
                'contenido' => 'A principios del mes de julio tuve la oportunidad de hacer uno de esos viajes de prensa con los que todas soñamos.

                    El destino fue el Balneario Caldes de Boi, en Lérida, para conocer de primera mano, no solo el balneario (al que dedicaré un post entero) sino la marca Boi Thermal, de Martiderm, que aprovecha los poderes «casi milagrosos» de las aguar mineromedicinales que allí emanan.

                    No os voy a mentir, me estaba constando recopilar tanta información del balneario y sus aguas y contaros todo lo que allí hicimos, pero no quería dejar pasar más tiempo sin hablaros de un producto (en realidad de varios pero de uno en especial) que me tiene completamente fascinada: Silessence Cleanser Mousse.

                    Se trata de una mousse limpiadora que no sólo limpia de maravilla, contiene un 98% de origen natural sino que la textura es… MARAVILLOSA.


                    No soy capaz de describirlo con palabras: suave, delicada, ligera… convierte el momento de limpiar la piel en un auténtico placer. Pero no es como otras espumas… la textura es de lo mejor que he probado en mi vida, os lo prometo: es una caricia metida en un bote.

                    Leo que lleva manzanilla, lirio blanco (que proporciona efecto antiedad, antioxidante y purificante) y agua hipotónica que limpia y aporta una suavidad y un confort a la piel difícil de describir.

                    Pero sobre todo, yo destacaría la sensación, el momento de paz que te transmite.

                    Estoy probando más productos de la marca, porque confieso que ahora en verano son de lo más apetecibles pero este, junto a las aguas termales en spray, son mis favoritos de momento.

                    La limpiadora la podéis comprar en Amazon y os llega en menos de 24h: aquí.

                    El resto de productos los podéis encontrar aquí.

                    En unos días prometo contaros más sobre el balneario y resto de productos pero creo que Silessence Cleanser Mousse, merecía una mención aparte.',
                'imagen_contenido' => '',
                'imagen_portada' => '1633990590.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'articulo_id' => 5,
                'titulo' => 'EL VESTIDO NEGRO DE LAS BARRAS DE LABIOS',
                'fecha_publicacion'=> '2021-10-12',
                'contenido' => 'Os voy a contar la verdad: metí esta barra de labios en el coche porque, por su formato, era la única que no se me derretía con el calor.

                    Inmediatamente pasó a ser la barra de labios (o lápiz de labios) que utilizaba cuando salía de casa sin pintarme los labios (algo incomprensible hace meses pero que ahora al llevar mascarilla hago alguna vez) y me asombraba que pese a no ser un color rojo de los que tanto me gusta, favorecía muchísimo.

                    El otro día me sorprendió cuando una amiga me dijo que no podía vivir sin un lápiz de labios y de repente sacó esta misma barra de su bolso.

                    ¿Y por qué os lo cuento? Porque tiene un tono neutro bastante favorecedor que resalta el color de los labios pero que favorece a rubias y morenas. Con razón para la marca, Camaleón, es el «color básico» (Basic Colour).

                    La fijación además es bastante buena y la duración también. Vamos que mancha un poquito la mascarilla pero dura y permanece bastante tiempo.

                    Tiene un precio de 9,90 euros y lo podéis encontrar en la web de la marca: camaleoncosmetics.com

                    Como os digo en el título del post, me parece el típico producto para tener siempre a mano, para cualquier ocasión y sobre todo, para llevar en el coche si como yo, ahora con la mascarilla, os pintáis los labios en el último moemento ;)',
                'imagen_contenido' => '',
                'imagen_portada' => '1633990720.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'articulo_id' => 6,
                'titulo' => 'SUBE EL VOLUMEN… DE TU PELO',
                'fecha_publicacion'=> '2021-10-12',
                'contenido' => 'En los últimos meses he conseguido mantener el volumen del pelo secándolo boca abajo y jugando con el champú en seco de Batiste (que ya sabemos que es el mejor pero los olores últimamente se superan).

                    Esto me permitía tener el pelo más grueso, con olor a chuche o fruta y además disimular la mezcla de canas y mechas que tengo hasta que saque tiempo para un retoque.

                    Pero tengo que admitir que hay un producto que no puedo dejar de utilizar (con o sin el champú en seco) y es este mist de Moroccanoil que, creedme, funciona de verdad.

                    mist volumen moroccanoil
                    Lo aplicas sobre el pelo mojado (secado un poco con una toalla) y lo secas boca abajo.

                    El pelo queda grueso, con volumen,… y un olor que ya conocéis si habéis utilizado esta marca.

                    Su secreto está en el aceite de argán y la sal del Mar Muerto y dicen que aumenta un 50% el volumen hasta 72 horas (lo de las 72 horas no os lo podría asegurar) pero lo del volumen sí.

                    La bruma voluminizadora se vende en tiendas y peluquerías y en Amazon',
                'imagen_contenido' => '',
                'imagen_portada' => '1633990798.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);

        DB::table('articulos_tienen_etiquetas')->insert([
            [
                'articulo_id' => 1,
                'etiqueta_id' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'articulo_id' => 1,
                'etiqueta_id' => 6,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'articulo_id' => 1,
                'etiqueta_id' => 8,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'articulo_id' => 2,
                'etiqueta_id' => 6,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'articulo_id' => 2,
                'etiqueta_id' => 7,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'articulo_id' => 2,
                'etiqueta_id' => 9,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'articulo_id' => 3,
                'etiqueta_id' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'articulo_id' => 3,
                'etiqueta_id' => 6,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'articulo_id' => 3,
                'etiqueta_id' => 10,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'articulo_id' => 4,
                'etiqueta_id' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'articulo_id' => 4,
                'etiqueta_id' => 9,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'articulo_id' => 5,
                'etiqueta_id' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'articulo_id' => 6,
                'etiqueta_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'articulo_id' => 6,
                'etiqueta_id' => 9,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
