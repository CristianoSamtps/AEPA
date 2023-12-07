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
        Schema::create('projects_partnerships', function (Blueprint $table) {
            $table->unsignedBigInteger('projeto_id');
            $table->unsignedBigInteger('partnership_id');
            $table->primary(['projeto_id','partnership_id']);
            //Chaves estrangeiras
            $table->foreign('partnership_id')->references('id')->on('partnerships');
            $table->foreign('projeto_id')->references('id')->on('projetos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects_partnerships');
    }
};
