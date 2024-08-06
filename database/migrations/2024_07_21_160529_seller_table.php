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
        Schema::create('sellers',function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('user');
            $table->unsignedBigInteger('product');

            $table->foreign('user')->references('id')->on('users')->onUpdate('cascade');
            $table->foreign('product')->references('id')->on('products')->onUpdate('cascade');
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
