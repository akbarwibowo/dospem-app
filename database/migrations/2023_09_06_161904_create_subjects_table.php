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
        Schema::create('subjects', function(Blueprint $table){
            $table->id('id');
            $table->foreignId('concentration_id')->constrained(table: 'concentrations', column: 'id')->onUpdate('cascade')->onDelete('cascade');
            $table->smallInteger('semester');
            $table->string('subject', 255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjects');
    }
};
