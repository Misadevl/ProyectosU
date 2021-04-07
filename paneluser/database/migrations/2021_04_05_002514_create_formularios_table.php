<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormulariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formularios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email');
            $table->string('lugar');
            $table->string('pais')->nullable();
            $table->string('ciudad');
            $table->string('direccion');
            $table->string('codigo')->nullable();
            $table->integer('telefono');
            $table->integer('dni')->nullable();
            $table->string('tipo');
            $table->string('aerolinea')->nullable();
            $table->string('terrestre')->nullable();
            $table->string('producto');
            $table->string('kg')->nullable();
            $table->string('tonelada')->nullable();
            $table->string('total1')->nullable();
            $table->string('total2')->nullable();
            $table->string('tipopago')->nullable();
            $table->string('cuenta')->nullable();
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
        Schema::dropIfExists('formularios');
    }
}
