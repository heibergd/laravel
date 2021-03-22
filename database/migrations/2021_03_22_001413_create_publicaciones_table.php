<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicaciones', function (Blueprint $table) {
            $table->id();
            $table->integer('id_usuario');
            $table->string('nombre');
            $table->string('slug');
            $table->decimal('precio', $precision = 10, $scale = 2);
            $table->decimal('oferta', $precision = 10, $scale = 2);
            $table->dateTime('fecha_oferta');
            $table->integer('inventario');
            $table->string('descripcion');
            $table->string('categorias');
            $table->string('etiquetas');
            $table->integer('estado');
            $table->dateTime('fecha');
            $table->string('bloqueada');
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
        Schema::dropIfExists('publicaciones');
    }
}
