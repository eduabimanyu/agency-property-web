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
            $table->string('name');
            $table->text('description')->nullable();
            $table->foreignId('property_category_id')->constrained('property_categories');
            $table->decimal('price', 15, 2)->nullable();
            $table->string('location');
            $table->integer('bedrooms')->nullable();
            $table->integer('bathrooms')->nullable();
            $table->integer('land_area')->nullable(); // Luas tanah dalam m²
            $table->integer('building_area')->nullable(); // Luas bangunan dalam m²
            $table->string('status'); // Tersedia, Terjual, Dipesan
            $table->string('image')->nullable();
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
