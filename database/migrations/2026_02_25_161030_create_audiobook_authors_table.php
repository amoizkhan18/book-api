<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('audiobook_authors', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Display name: "William Shakespeare"
            $table->string('db_name'); // Database name: "Shakespeare, William, 1564-1616"
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->string('color')->default('#1A1A1A');
            $table->integer('display_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('audiobook_authors');
    }
};
