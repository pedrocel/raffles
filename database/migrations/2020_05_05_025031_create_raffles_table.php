<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRafflesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('raffles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('premio');
            $table->integer('quantidade');
            $table->unsignedBigInteger('id_status');
            $table->foreign('id_status')->references('id')->on('status_raffles');
            $table->unsignedBigInteger('criado_por');
            $table->foreign('criado_por')->references('id')->on('usuarios');
            $table->unsignedBigInteger('id_organizacao');
            $table->foreign('id_organizacao')->references('id')->on('organizacao');
            $table->string('foto');
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
        Schema::dropIfExists('raffles');
    }
}