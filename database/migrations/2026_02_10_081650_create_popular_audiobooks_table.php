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
        Schema::create('popular_audiobooks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->text('bookdesc');
            $table->string('imageurl');
            $table->json('audiolinks'); // Array of MP3 URLs
            $table->json('genres'); // Store genres as JSON array
            $table->string('color')->default('#1A1A1A'); // Hex color for card background
            $table->integer('order')->default(0); // For custom ordering
            $table->boolean('is_active')->default(true); // To show/hide audiobooks
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('popular_audiobooks');
    }
};
