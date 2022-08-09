<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //Llamamos a los seders en orden de ejecución, se ejecutan con el comando: php artisan db:seed
        $this->call(TipoUsuarioSeeder::class);
        $this->call(UsuariosTienenProductosSeeder::class);
        $this->call(ComprasTienenProductosSeeder::class);
        $this->call(ProductosSeeder::class);
        $this->call(UsuariosSeeder::class);
        $this->call(ComprasSeeder::class);
        $this->call(ArticulosTienenEtiquetasSeeder::class);
        $this->call(EtiquetasSeeder::class);
        $this->call(ArticulosSeeder::class);
        $this->call(EstadoArticuloSeeder::class);
    }
}
