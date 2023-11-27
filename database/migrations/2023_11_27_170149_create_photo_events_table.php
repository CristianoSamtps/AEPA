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
        Schema::create('photo_event', function (Blueprint $table) {
            $table->id();
            $table->string('fotografia',255);
            $table->enum('destaque', ['sim', 'não'])->default('não')->unique();
            $table->string('descricao', 255);  
            $table->timestamps(); //created_at e updated_at

            $table->unsignedBigInteger('events_id');
            $table->foreign('events_id')->references('id')->on('events');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('photo_event');
    }
};
