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
        Schema::create('member_doner', function (Blueprint $table) {
            $table->id();
            $table->enum('subscrito',['sim','não']);
            $table->enum('metodo_pag',['Cartão de crédito', 'Transferência bancária', ' Referência e entidade']);

            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->references('id')->on('users');
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('member_doner');
    }
};
