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
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id();
            $table->json('q1')->nullable();
            $table->json('q2')->nullable();
            $table->json('q3')->nullable();
            $table->json('q4')->nullable();
            $table->json('q5')->nullable();
            $table->json('q6')->nullable();
            $table->json('q7')->nullable();
            $table->json('q8')->nullable();
            $table->json('q9')->nullable();
            $table->json('q10')->nullable();
            $table->json('q11')->nullable();
            $table->json('q12')->nullable();
            $table->json('q13')->nullable();
            $table->json('q14')->nullable();
            $table->json('q15')->nullable();
            $table->json('q16')->nullable();
            $table->json('q17')->nullable();
            $table->json('q18')->nullable();
            $table->json('q19')->nullable();
            $table->json('q20')->nullable();
            $table->json('q21')->nullable();
            $table->json('q22')->nullable();
            $table->json('q23')->nullable();
            $table->json('q24')->nullable();
            $table->json('q25')->nullable();
            $table->integer('c_per')->default(0);
            $table->integer('i_per')->default(0);
            $table->integer('o_per')->default(0);
            $table->integer('v_per')->default(0);
            $table->integer('a_per')->default(0);
            $table->String('category', 1)->nullable();
            $table->String('outcome', 5)->nullable();
            $table->String('name', 50)->nullable();
            $table->String('email', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quizzes');
    }
};
