<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date');
            $table->string('metodo_pag', 250);
            $table->dateTime('proximo_pag');
            $table->timestamps();
            $table->unsignedBigInteger('member_doner_id');
            $table->unsignedBigInteger('planType_id');
            $table->foreign('member_doner_id')->references('id')->on('members_doners');
            $table->foreign('planType_id')->references('id')->on('planTypes'); // Corrected table name
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};
