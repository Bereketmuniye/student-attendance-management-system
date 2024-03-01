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
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->string('reg_ID');
            $table->string('subject_ID');
            $table->date('date');
            $table->string('status')->nullable();    
            $table->foreign('reg_ID')->references('reg_ID')->on('students')->onDelete('cascade');
            $table->foreign('subject_ID')->references('subject_ID')->on('subjects')->onDelete('cascade');   
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
};
