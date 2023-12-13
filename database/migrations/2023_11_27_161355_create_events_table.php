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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('localizacao', 255);
            $table->string('descricao', 255);
            $table->string('name', 255)->unique();
            $table->integer('vagas');
            $table->datetime('data');
            $table->softDeletes(); //deleted_at
            $table->timestamps(); //created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
