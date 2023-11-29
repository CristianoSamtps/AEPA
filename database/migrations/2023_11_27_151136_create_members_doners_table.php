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
        Schema::create('members_doners', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->enum('subscrito',['S','N'])->default('N');
            $table->enum('metodo_pag',['CC', 'TB', 'RE'])->nullable();
            $table->foreign('id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members_doners');
    }
};
