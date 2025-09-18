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
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descripcion');
            $table->decimal('precio', 10, 2);
            $table->integer('duracion')->comment('Duración en horas');
            $table->integer('max_personas')->comment('Número máximo de personas permitidas');
            $table->foreignId('id_guia')->constrained('usuarios')->onDelete('cascade');
            $table->string('ubicacion')->nullable();
            $table->timestamp('fecha_inicio')->nullable()->comment('Fecha de inicio del tour');
            $table->timestamp('fecha_fin')->nullable()->comment('Fecha de fin del tour');
            $table->text('imagen_url')->nullable();
            $table->boolean('activo')->default(true)->comment('Estado activo/inactivo del tour');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
};