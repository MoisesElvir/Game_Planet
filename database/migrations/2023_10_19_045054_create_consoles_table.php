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
        Schema::create('consoles', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('brand', 50);
            $table->string('model', 50);
            $table->date('year');
            $table->integer('price');
            $table->integer('Capacity');
            $table->unsignedBigInteger("id_supplier");
            $table->foreign("id_supplier")->references("id")->on("_supplier");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consoles');
    }
};
