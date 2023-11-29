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
        Schema::create('participants', function (Blueprint $table) {

            $table->id();
            $table->string('obs', 255);
            $table->timestamps(); //created_at e updated_at

            //chaves estrangeiras
            $table->unsignedBigInteger('event_id');
            $table->unsignedBigInteger('member_doner_id');

            $table->foreign('event_id')->references('id')->on('events');
            $table->foreign('member_doner_id')->references('id')->on('members_doners');

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
