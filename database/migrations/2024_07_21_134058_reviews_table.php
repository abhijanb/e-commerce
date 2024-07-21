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
        //
        Schema::create('Reviews',function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('user');
            $table->unsignedBigInteger('products');
            $table->integer('rating');
            $table->string('commit');
            $table->timestamps('review_date');
            $table->foreign('user')->references('id')->on('users')->onUpdate('cascade');
            $table->foreign('products')->references('id')->on('Products')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
