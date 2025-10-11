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
        Schema::table('property_categories', function (Blueprint $table) {
            if (!Schema::hasColumn('property_categories', 'slug')) {
                $table->string('slug')->nullable()->after('name');
            }
            if (!Schema::hasColumn('property_categories', 'icon')) {
                $table->string('icon')->nullable()->after('description');
            }
            if (!Schema::hasColumn('property_categories', 'is_active')) {
                $table->boolean('is_active')->default(true)->after('icon');
            }
        });
        
        // Update existing records with slugs
        \Illuminate\Support\Facades\DB::table('property_categories')->whereNull('slug')->update([
            'slug' => \Illuminate\Support\Facades\DB::raw("LOWER(REPLACE(REPLACE(REPLACE(name, ' ', '-'), '/', '-'), '--', '-'))")
        ]);
        
        // Make slug column not nullable and add unique constraint if it doesn't exist
        Schema::table('property_categories', function (Blueprint $table) {
            if (Schema::hasColumn('property_categories', 'slug')) {
                $table->string('slug')->nullable(false)->change();
                
                // Check if unique constraint already exists
                if (!Schema::hasIndex('property_categories', 'property_categories_slug_unique')) {
                    $table->unique('slug');
                }
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('property_categories', function (Blueprint $table) {
            $table->dropUnique(['slug']); // Drop unique constraint first
            $table->dropColumn(['slug', 'icon', 'is_active']);
        });
    }
};
