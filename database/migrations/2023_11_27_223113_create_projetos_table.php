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
        Schema::create('projetos', function (Blueprint $table) {

            $table->id();
            $table->string('titulo');
            $table->string('subtitulo');
            $table->text('descricao');
            $table->enum('estado', ['concluido', 'em andamento', 'cancelado', 'indisponivel']);
            $table->text('localidade');
            $table->decimal('objetivos', $precision = 10, $scale = 2);
            $table->date('data_final');
            $table->boolean('voluntariado');
            $table->timestamps();
            $table->SoftDeletes();


            $table->unsignedBigInteger('partnership_id');
            $table->foreign('partnership_id')->references('id')->on('partnerships');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projetos');
    }
};
