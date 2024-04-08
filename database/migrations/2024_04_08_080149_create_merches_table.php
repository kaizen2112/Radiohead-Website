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
        Schema::create('merches', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('type');
            $table->string('name');
            $table->decimal('price', 8, 2);
            $table->integer('stock')->default(0);
            $table->boolean('availability')->default(true);
            $table->string('image')->nullable();
            $table->longText('description')->nullable();
            $table->string('size')->nullable();
            $table->date('release_date')->default(now());

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('merchs');
    }
};
