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
        Schema::create('warranty', function (Blueprint $table) {
            $table->id();
            $table->string('warranty', 50);
            $table->dateTime('warranty_date');
            $table->unsignedBigInteger('id_product');
            $table->foreign("id_product")->references("id")->on("product");
            $table->unsignedBigInteger("id_bill");
            $table->foreign("id_bill")->references("id")->on("bill");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('warranty');
    }
};
