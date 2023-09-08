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
        Schema::create('comentarios', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fecha');
            $table->text('comentario');
            $table->foreignId('articulo_comentado')->constrained('articulos')->OnDelete('cascade');
            $table->foreignId('hace_comentario')->constrained('usuarios')->OnDelete('cascade');
            $table->foreignId('respuesta_de')->constrained('comentarios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comentarios');
    }
};
