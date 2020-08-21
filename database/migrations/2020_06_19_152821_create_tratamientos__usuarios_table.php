<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTratamientosUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tratamientos__usuarios', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_inicio');
            $table->bigInteger('usuario_id')->unsigned();
            $table->bigInteger('tratamiento_id')->unsigned();
            $table->json('tratamiento');
            $table->timestamps();

            $table->foreign('usuario_id')->references('id')->on('usuarios')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('tratamiento_id')->references('id')->on('tratamientos')
            ->onDelete('cascade')
            ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tratamientos__usuarios');
    }
}
