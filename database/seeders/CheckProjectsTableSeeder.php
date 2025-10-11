<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CheckProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Periksa apakah tabel projects ada
        if (Schema::hasTable('projects')) {
            echo "Tabel projects ditemukan.\n";
            
            // Periksa field-field dalam tabel projects
            $columns = Schema::getColumnListing('projects');
            echo "Field-field dalam tabel projects:\n";
            foreach ($columns as $column) {
                echo "- " . $column . "\n";
            }
        } else {
            echo "Tabel projects tidak ditemukan.\n";
        }
    }
}

