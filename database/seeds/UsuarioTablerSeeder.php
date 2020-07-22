<?php

use Illuminate\Database\Seeder;

class UsuarioTablerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
             ['name' => 'Pedro Vinicius de Souza Novais',
             'email' => 'pedronovaisengcp@gmail.com',
             'password' => bcrypt(123456),
             'id_perfil' => 3,
             'id_organizacao' => 1]
        ]);

    }


}
