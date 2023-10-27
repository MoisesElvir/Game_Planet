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
        Schema::create('buy', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');
            $table->string('payment_method', 20);
            $table->unsignedBigInteger("id_customer");
            $table->foreign("id_customer")->references("id")->on("customer");
            $table->unsignedBigInteger("id_product");
            $table->foreign("id_product")->references("id")->on("product");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buy');
    }
};
