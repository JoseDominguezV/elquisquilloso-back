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
        Schema::create('usuario_articulo', function (Blueprint $table) {
            $table->foreignId('usuario_guarda')->constrained('usuarios')->OnDelete('cascade');
            $table->foreignId('articulo_guardado')->constrained('articulos')->OnDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario_articulo');
    }
};
