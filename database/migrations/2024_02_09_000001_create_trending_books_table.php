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
        Schema::create('trending_books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->text('bookdesc');
            $table->string('imageurl');
            $table->string('bookurl');
            $table->json('genres'); // Store genres as JSON array
            $table->integer('order')->default(0); // For custom ordering
            $table->boolean('is_active')->default(true); // To show/hide books
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trending_books');
    }
};