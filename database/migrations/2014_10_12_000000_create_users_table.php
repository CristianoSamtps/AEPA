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
            $table->string('telemovel',13);
            $table->enum('genero', ['feminino', 'masculino', 'outro', 'prefiro não dizer']);
            $table->string('email')->unique();
            $table->string('foto',255);
            $table->date('data_nascimento');
            $table->integer('idade')->nullable()->virtual('TIMESTAMPDIFF(YEAR,data_nascimento, CURDATE())');
            $table->enum('tipo', ['Doador', 'Voluntario']);
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
