<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insertamos los datos a la tabla en la BBDD
        DB::table('usuarios')->insert([
            [
                'usuario_id' => 1,
                'tipo_fk' => 1,
                'nombre' => 'Tamara',
                'apellidos' => 'Rodríguez Manzanero',
                'fecha_nacimiento' => '1990-11-21',
                'imagen' => '',
                'email' => 'tamara.rodriguezm@davinci.edu.ar',
                'nombre_usuario' => 'tarodman',
                'password' => Hash::make('tamara1234'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'usuario_id' => 2,
                'tipo_fk' => 1,
                'nombre' => 'Santiago',
                'apellidos' => 'Gallino',
                'fecha_nacimiento' => '1980-12-12',
                'imagen' => '',
                'email' => 'santiago.gallino@davinci.edu.ar',
                'nombre_usuario' => 'santiago',
                'password' => Hash::make('santiago1234'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'usuario_id' => 3,
                'tipo_fk' => 1,
                'nombre' => 'Irene',
                'apellidos' => 'Rodríguez',
                'fecha_nacimiento' => '2000-04-23',
                'imagen' => '',
                'email' => 'irene@email.com',
                'nombre_usuario' => 'irene',
                'password' => Hash::make('irene1234'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'usuario_id' => 4,
                'tipo_fk' => 2,
                'nombre' => 'Nahuel',
                'apellidos' => 'Chierichetti',
                'fecha_nacimiento' => '1996-09-06',
                'imagen' => '',
                'email' => 'nahuel.chierichetti@davinci.edu.ar',
                'nombre_usuario' => 'nahuel',
                'password' => Hash::make('nahuel1234'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'usuario_id' => 5,
                'tipo_fk' => 2,
                'nombre' => 'Saray',
                'apellidos' => 'Bejarano',
                'fecha_nacimiento' => '1993-03-24',
                'imagen' => '',
                'email' => 'saray@email.com',
                'nombre_usuario' => 'saray',
                'password' => Hash::make('saray1234'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'usuario_id' => 6,
                'tipo_fk' => 2,
                'nombre' => 'Daniel',
                'apellidos' => 'Zerda',
                'fecha_nacimiento' => '1986-03-31',
                'imagen' => '',
                'email' => 'daniel@email.com',
                'nombre_usuario' => 'daniel',
                'password' => Hash::make('daniel1234'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'usuario_id' => 7,
                'tipo_fk' => 2,
                'nombre' => 'Laura',
                'apellidos' => 'Portela',
                'fecha_nacimiento' => '1968-08-18',
                'imagen' => '',
                'email' => 'laura@email.com',
                'nombre_usuario' => 'laura',
                'password' => Hash::make('laura1234'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);

        DB::table('usuarios_tienen_productos')->insert([
            [
                'usuario_id' => 4,
                'producto_id' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'usuario_id' => 4,
                'producto_id' => 6,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'usuario_id' => 4,
                'producto_id' => 8,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'usuario_id' => 5,
                'producto_id' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'usuario_id' => 5,
                'producto_id' => 6,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'usuario_id' => 5,
                'producto_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'usuario_id' => 7,
                'producto_id' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'usuario_id' => 7,
                'producto_id' => 8,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'usuario_id' => 7,
                'producto_id' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'usuario_id' => 4,
                'producto_id' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'usuario_id' => 5,
                'producto_id' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'usuario_id' => 6,
                'producto_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
