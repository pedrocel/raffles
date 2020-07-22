<?php

use Illuminate\Database\Seeder;

class PerfilTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('perfil')->insert([
             ['nome_perfil' => 'Gestor'],
             ['nome_perfil' => 'Vendedor'],
             ['nome_perfil' => 'Administrador']
        ]);

    }
}
