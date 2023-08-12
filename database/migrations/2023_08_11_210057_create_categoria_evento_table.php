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
        Schema::create('categoria_evento', function (Blueprint $table) {
            $table->foreignUuid('evento_id')->constrained('eventos')->onDelete('cascade')->primary();
            $table->foreignId('categoria_id')->constrained('categorias')->onDelete('cascade')->primary();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categoria_evento');
    }
};
