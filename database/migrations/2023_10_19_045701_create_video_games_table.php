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
        Schema::create('video_games', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('gender', 50);
            $table->string('classification', 50);
            $table->integer('price');
            $table->unsignedBigInteger("id_developer");
            $table->foreign("id_developer")->references("id")->on("developer");
            $table->unsignedBigInteger("id_console");
            $table->foreign("id_console")->references("id")->on("consoles");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('video_games');
    }
};
