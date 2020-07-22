<?php

use Illuminate\Database\Seeder;

class OrganizacaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('organizacao')->insert([
             ['nome_organizacao' => 'Rifa dos Primos', 'rota_organizacao' => 'rifadosprimos', 'foto_organizacao' => 'foto', 'ativo' => 1]
        ]);

    }
}
