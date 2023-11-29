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

            $table->unsignedBigInteger('member_doner_id');
            $table->foreign('member_doner_id')->references('id')->on('members_doners');

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
