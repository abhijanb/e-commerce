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
        Schema::create('products',function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('user');
            $table->string('name');
            $table->string('image');
            $table->string('description');
            $table->json('details');
            $table->integer('price');
            $table->integer('stock');
            $table->unsignedBigInteger('category');
            $table->foreign('category')->references('id')->on('categories')->onUpdate('cascade');
            $table->foreign('user')->references('id')->on('users')->onUpdate('cascade');
            $table->timestamps();
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
