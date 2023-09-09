<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('subtitulo');
            $table->string('imagen_portada')->nullable();
            $table->longText('contenido');
            $table-> dateTime('fecha_publicacion')->default(now());
            $table->tinyInteger('estado_revision')->default(2);
            $table-> unsignedBigInteger('autor_id');
            $table->foreign('autor_id')->references('id')->on('usuarios')->onDelete('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articulos');
    }
};
