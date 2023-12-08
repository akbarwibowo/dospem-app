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
            $table->id('result_id')->autoIncrement();
            $table->foreignId('user_id')->constrained(table: 'users', column:'id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('concentration_id')->constrained(table: 'concentrations', column: 'id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('question_id')->constrained(table: 'questions', column: 'id')->onDelete('cascade')->onUpdate('cascade');
            $table->smallInteger('answers');
            $table->smallInteger('semester');
            // $table->string('major', 100);55
            $table->timestamps();
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
