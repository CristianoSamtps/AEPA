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
        Schema::create('doacoes', function (Blueprint $table) {
            $table->id();
            $table->string('title',100);
            $table->decimal('valor', $precision = 8,$scale =2 );
            $table->enum('anonimo', ['S','N'])->default('N');
            $table->datetime('create_at');
            $table->unsignedBigInteger('membroDoador_id');
            $table->foreign('membroDoador_id')->references('id')->on('membroDoador');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doacoes');
    }
};
