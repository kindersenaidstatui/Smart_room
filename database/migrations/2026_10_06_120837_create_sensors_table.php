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
        Schema::create('sensors', function (Blueprint $table) {
            $table->id();
            $table->string('nome_sensor');
            $table->string('tipo_sensor');
            $table->decimal('temperatura', 5, 2);
            $table->decimal('umidade', 5, 2);
            $table->decimal('luminosidade', 5, 2);
            $table->boolean('sensor_ativo')->default(true); // ou false
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sensors');
    }
};
