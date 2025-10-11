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
        Schema::table('projects', function (Blueprint $table) {
            $table->string('year')->nullable()->after('status');
            $table->string('units')->nullable()->after('year');
            $table->string('area')->nullable()->after('units');
            $table->text('key_feature')->nullable()->after('area');
            $table->string('e_brochure')->nullable()->after('key_feature');
            $table->json('gallery_images')->nullable()->after('e_brochure');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn(['year', 'units', 'area', 'key_feature', 'e_brochure', 'gallery_images']);
        });
    }
};
