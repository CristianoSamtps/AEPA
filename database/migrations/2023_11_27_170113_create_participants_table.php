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
        Schema::create('participant', function (Blueprint $table) {
            $table->id();
            $table->varchar('vagas', 255);
            $table->timestamps(); //created_at e updated_at

            //chaves estrangeiras
            $table->unsignedBigInteger('event_id');
            $table->unsignedBigInteger('member_doner');

            $table->foreign('event_id')->references('id')->on('events');
            $table->foreign('member_doner')->references('id')->on('members_doners');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participant');
    }
};
