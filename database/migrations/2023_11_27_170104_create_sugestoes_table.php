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
        Schema::create('sugestoes', function (Blueprint $table) {
            $table->id();
            $table->string('sugestao',200);
            $table->enum('aprovacao', ['S','N'])->default('N');
            $table->integer('votos');
            $table->enum('listado', ['NL','L'])->default('L');
            $table->unsignedBigInteger('membroDoador_id');
            $table->foreign('membroDoador_id')->references('id')->on('membroDoador');
            create_at
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sugestoes');
    }
};
