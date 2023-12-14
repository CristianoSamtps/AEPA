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
        Schema::create('planTypes', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->int('duracao');
            $table->decimal('valor', 10, 2);
            $table->dateTime('proximo_pag');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('planTypes');
    }
};
