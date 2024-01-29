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
        Schema::table('doacoes', function (Blueprint $table) {
            $table->enum('metodo_pag', ['C', 'R','M'])->default('C');
            $table->unsignedBigInteger('num_cartao')->nullable();
            $table->date('data_cartao')->nullable();
            $table->integer('cvv_cartao')->nullable();
            $table->unsignedBigInteger('referencia')->nullable();
            $table->unsignedBigInteger('num_tel')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('doacoes', function (Blueprint $table) {
            //
        });
    }
};
