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
        Schema::create('trainings', function (Blueprint $table) {
            $table->id();
            $table->integer('teacher_id');
            $table->integer('category_id');
            $table->string('title');
            $table->text('short_description');
            $table->text('date');
            $table->integer('price');
            $table->longText('long_description');
            $table->text('image');
            $table->tinyInteger('hit_count')->default(0);
            $table->tinyInteger('offer_status')->default(0);
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trainings');
    }
};
