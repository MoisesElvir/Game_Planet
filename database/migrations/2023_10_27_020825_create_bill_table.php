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
        Schema::create('bill', function (Blueprint $table) {
            $table->id();
            $table->integer('bill_number');
            $table->dateTime('Bill_Date');
            $table->integer('total');
            $table->unsignedBigInteger("id_buy");
            $table->foreign("id_buy")->references("id")->on("buy");
            $table->unsignedBigInteger("id_employee");
            $table->foreign("id_employee")->references("id")->on("employees");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bill');
    }
};
