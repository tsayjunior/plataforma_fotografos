<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('ci');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('descripcion')->nullable();
            $table->dateTime('fecha_nac', 0);
            $table->char('sexo', 1)->nullable();//M o F
            $table->string('celular');//con codigo de pais
            $table->string('profesion')->nullable();
            $table->string('lugar_trabajo')->nullable();
            $table->string('residencia')->nullable();
            $table->char('tipo', 1);//P o F//usuario persona, o usuario fotografo, en este caso, un fotografo puede ser usuario al mismo tiempo
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('personas');
    }
}
