<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ordenes', function (Blueprint $table) {
            $table->id();

            $table->foreignId('equipo_id')
                ->constrained('equipos')
                ->restrictOnDelete();

            $table->text('falla_informada');
            $table->text('diagnostico')->nullable();
            $table->text('estado_fisico');

            $table->dateTime('fecha_ingreso');
            $table->date('fecha_estimada')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ordenes');
    }
};