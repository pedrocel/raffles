<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDadosPessoaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dados_pessoais', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_cidade');
            $table->foreign('id_cidade')->references('id')->on('cidade');
            $table->unsignedBigInteger('id_estado');
            $table->foreign('id_estado')->references('id')->on('estado');
            $table->unsignedBigInteger('id_pais');
            $table->foreign('id_pais')->references('id')->on('pais');
            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_usuario')->references('id')->on('usuarios');
            $table->string('telefone_1');
            $table->string('telefone_2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dados_pessoais');
    }
}
