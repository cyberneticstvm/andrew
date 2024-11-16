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
        Schema::create('strengths', function (Blueprint $table) {
            $table->id();
            $table->string('category', 5)->nullable();
            $table->string('outcome', 25)->nullable();
            $table->string('font_color', 10)->nullable();
            $table->string('bg_color', 10)->nullable();
            $table->string('rgb', 15)->nullable();
            $table->string('img_name')->nullable();
            $table->string('img_name1')->nullable();
            $table->string('img_name2')->nullable();
            $table->text('description')->nullable();
            $table->text('description1')->nullable();
            $table->text('description2')->nullable();
            $table->text('description3')->nullable();
            $table->integer('order_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('strengths');
    }
};
