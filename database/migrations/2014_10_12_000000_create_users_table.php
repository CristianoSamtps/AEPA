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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('telemovel',13)->nullable();
            $table->enum('genero', ['feminino', 'masculino', 'outro', 'prefiro não dizer'])->nullable();
            $table->string('email')->unique();
            $table->string('foto',255)->nullable();
            $table->date('data_nascimento')->nullable();
            $table->integer('idade')->nullable()->virtual('TIMESTAMPDIFF(YEAR,data_nascimento, CURDATE())')->nullable();
            $table->enum('tipo', ['Membro_Doador','Admin'])->default('Membro_Doador');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            //$table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
