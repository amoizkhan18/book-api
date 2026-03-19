<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('user_activity', function (Blueprint $table) {
            $table->id();
            $table->string('fcm_token')->unique();
            $table->string('last_book_title')->nullable();
            $table->string('last_book_type')->nullable();
            $table->string('last_book_url')->nullable();
            $table->string('last_book_cover')->nullable();
            $table->integer('last_progress')->default(0);
            $table->json('favorite_genres')->nullable();
            $table->timestamp('last_active_at')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_activity');
    }
};
