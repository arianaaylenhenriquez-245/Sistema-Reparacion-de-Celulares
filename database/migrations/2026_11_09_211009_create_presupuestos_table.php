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
        Schema::create('presupuestos', function (Blueprint $table) {
            $table->id();

            $table->foreignId('orden_id')
                ->unique()
                ->constrained('ordenes')
                ->restrictOnDelete();

            $table->foreignId('estado_id')
                ->constrained('estados_presupuesto')
                ->restrictOnDelete();

            $table->decimal('costo_repuestos', 12, 2);
            $table->decimal('mano_obra', 12, 2);
            $table->decimal('otros_costos', 12, 2)->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presupuestos');
    }
};
