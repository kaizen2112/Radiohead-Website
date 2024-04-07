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
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('tour_title');
            $table->text('tour_description');
            
            $table->string('tour_image');
            $table->string('ticket_price');

            $table->date('tour_date'); // Date data type
            $table->string('location');
            $table->string('theatre');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
};
