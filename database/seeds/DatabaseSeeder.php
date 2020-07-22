<?php

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
        $this->call(OrganizacaoTableSeeder::class);
        $this->call(PerfilTableSeeder::class);
        $this->call(UsuarioTablerSeeder::class);
    }
}
