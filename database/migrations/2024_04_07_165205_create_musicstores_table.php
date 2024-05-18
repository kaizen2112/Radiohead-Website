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
        Schema::create('musicstores', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('album_title');
            $table->string('album_artist');
            $table->string('song_name');
            $table->date('album_date');
            $table->string('album_image')->nullable();
            $table->string('album_price');
            $table->string('album_genre');
            $table->longText('album_description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('musicstore');
    }
};
