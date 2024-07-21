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
        Schema::create('Reviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user');
            $table->unsignedBigInteger('product');
            $table->integer('rating');
            $table->string('commit');
            $table->timestamps(); // creates `created_at` and `updated_at` columns
            $table->timestamp('review_date')->nullable(); // specific review_date column
            $table->foreign('user')->references('id')->on('users')->onUpdate('cascade');
            $table->foreign('product')->references('id')->on('Products')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Reviews');
    }
};
