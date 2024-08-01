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
        Schema::create('orders',function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('user');
            $table->unsignedBigInteger('products');
            $table->integer('quantity');
            $table->boolean('paied');
            $table->timestamps();
            $table->foreign('user')->references('id')->on('users')->onUpdate('cascade');
            $table->foreign('products')->references('id')->on('products')->onUpdate('cascade');
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
