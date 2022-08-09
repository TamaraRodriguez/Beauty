<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            [
                'producto_id' => '1',
                'nombre' => 'Cepillo + pasta de dientes',
                'descripcion' => 'Sus componentes biológicos aportan un cuidado saludable para dientes y encías. No contiene aditivos, conservantes artificiales ni aromas sintéticos.

                    El dentífrico BIOTERRA es 100% natural, libre de flúor y creado en base a ingredientes nobles como caléndula, menta, salvia y clavo.',
                'precio' => '915',
                'stock' => '50',
                'imagen' => 'pastas+cepillo.png',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'producto_id' => '2',
                'nombre' => 'Shampoo fortalecedor Semi Natural',
                'descripcion' => 'Está elaborado con ácidos grasos vegetales de coco y palta, extractos de jojoba, aloe, ortiga y aceite esencial de geranio. Ideal para todo tipo de cabellos.',
                'precio' => '1450',
                'stock' => '13',
                'imagen' => 'bioterra-shampoo.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'producto_id' => '3',
                'nombre' => 'Jabón natural artesanal de Romero, Menta y Karité',
                'descripcion' => 'El jabón natural artesanal de Romero, Menta y Karité BioHerbaria limpia y nutre la piel del rostro y el cuerpo. Por un lado, la manteca de Karité otorga la nutrición mientras que los aceites esenciales de Romero y Menta ayudan a activar la circulación sanguínea, energizando y refrescando el cuerpo.',
                'precio' => '520',
                'stock' => '45',
                'imagen' => 'jabon-natural.png',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'producto_id' => '4',
                'nombre' => 'Peine de madera con mango',
                'descripcion' => 'Está fabricado con maderas de reforestación. Puede usarse sobre cabello húmedo o mojado. Es anti-frizz ya que no produce estática por su material. No quiebra la fibra capilar. Al ser completamente natural colabora con la mejor distribución de la oleosidad desde el cuero cabelludo hasta las puntas del cabello. ',
                'precio' => '599',
                'stock' => '32',
                'imagen' => 'peine-mader.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'producto_id' => '5',
                'nombre' => 'Talco de arcillas y aceites esenciales',
                'descripcion' => 'El Talco Natural de Arcillas y aceites esenciales Bioterra es híper absorbente. Suaviza la piel y se recomienda para el cuidado de la piel de los bebés, niños y adultos. Ideal para usar en zonas de transpiración. El talco natural está elaborado en base a polvo de arcillas super finas y suaves, con dos variedades para elegir: extracto de rosas o de romero.',
                'precio' => '475',
                'stock' => '16',
                'imagen' => 'talco.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'producto_id' => '6',
                'nombre' => 'Aceite De Coco Virgen Orgánico Natural 360ml',
                'descripcion' => 'Los aceites de coco BIOTERRA son 100% naturales y tienen distintos usos, ya que pueden aplicarse directamente sobre la piel, o bien, utilizarse como ingredientes en la cocina.',
                'precio' => '1340',
                'stock' => '3',
                'imagen' => 'aceite-coco.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'producto_id' => '7',
                'nombre' => 'Aceite Vegetal Almendra Orgánico Puro Natural 30ml',
                'descripcion' => 'l Aceite Vegetal de Almendra Virgen Puro Natural Bioterra es prensado en frío y tiene Certificación Orgánica. Calma irritaciones, ablanda tejidos endurecidos, suaviza y desinflama la piel. Es ideal tanto para pieles sensibles como de bebés.',
                'precio' => '1172',
                'stock' => '9',
                'imagen' => 'aceite-vegetal-almendra.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'producto_id' => '8',
                'nombre' => 'Desodorante Natural en crema 50ml',
                'descripcion' => 'Desodorante en crema, eficaz y amigable con todo tipo de piel. Mantiene la piel humectada y habilita la respiración de la piel, neutralizando el olor a transpiración con una agradable fragancia de sándalo, geranio y limón.',
                'precio' => '910',
                'stock' => '120',
                'imagen' => 'desodorante-natural.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
