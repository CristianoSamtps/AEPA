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
            $table->string('title', 100)->nullable();
            $table->decimal('valor', $precision = 8, $scale = 2);
            $table->enum('anonimo', ['S', 'N'])->default('N');
            $table->unsignedBigInteger('member_doner_id')->nullable();
            $table->foreign('member_doner_id')->references('id')->on('members_doners');
            $table->unsignedBigInteger('projeto_id')->nullable();
            $table->foreign('projeto_id')->references('id')->on('projetos');
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
