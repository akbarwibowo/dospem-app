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
        Schema::create('result', function(Blueprint $table){
            $table->id('id')->autoIncrement();
            $table->bigInteger('nim');
            $table->string('result', 255);
            $table->smallInteger('semester');
            $table->string('major', 100);
            $table->index('nim');
            $table->foreign('nim')->references('users')->on('nim')->onDelete('cascade')->onUpdate('cascade');
            $table->index('semester');
            $table->foreign('semester')->references('subjects')->on('semester')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('result');
    }
};
