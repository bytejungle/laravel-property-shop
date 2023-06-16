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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('views')->default(0);
            $table->unsignedSmallInteger('bedroom_count')->default(0);
            $table->unsignedSmallInteger('bathroom_count')->default(0);
            $table->unsignedSmallInteger('car_count')->default(0);
            $table->text('description');
            $table->string('street_address');
            $table->decimal('price', 11, 2)->default(0);
            $table->dateTime('listed_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
