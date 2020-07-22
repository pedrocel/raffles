<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnidadeRaffleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidade_raffle', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('comprador_nome');
            $table->string('comprador_telefone');
            $table->unsignedBigInteger('id_status');
            $table->foreign('id_status')->references('id')->on('status_raffles');
            $table->unsignedBigInteger('id_rifa');
            $table->foreign('id_rifa')->references('id')->on('raffles');
            $table->unsignedBigInteger('criado_por');
            $table->foreign('criado_por')->references('id')->on('usuarios');
            $table->unsignedBigInteger('id_organizacao');
            $table->foreign('id_organizacao')->references('id')->on('organizacao');
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
        Schema::dropIfExists('unidade_raffle');
    }
}
