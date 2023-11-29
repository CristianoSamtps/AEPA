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
        Schema::create('plans_table', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date');
            $table->string('metodo_pag', 250);
            $table->dateTime('proximo_pag');
            $table->timestamps();
            $table->unsignedBigInteger('planTypes_id');
            $table->foreign('planTypes_id')->references('id')->on('planTypes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plans_table');
    }
};
