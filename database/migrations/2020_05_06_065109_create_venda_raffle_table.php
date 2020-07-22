<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendaRaffleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venda_raffle', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('forma_pagamento');
            $table->unsignedBigInteger('id_unidade');
            $table->foreign('id_unidade')->references('id')->on('unidade_raffle');
            $table->unsignedBigInteger('vendido_por');
            $table->foreign('vendido_por')->references('id')->on('usuarios');
            $table->unsignedBigInteger('id_org');
            $table->foreign('id_org')->references('id')->on('organizacao');
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
        Schema::dropIfExists('venda_raffle');
    }
}
