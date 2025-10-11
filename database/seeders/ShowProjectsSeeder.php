<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ShowProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = Project::all();
        
        echo "Data Projects:\n";
        echo "====================\n";
        
        foreach ($projects as $project) {
            echo "ID: " . $project->id . "\n";
            echo "Name: " . $project->name . "\n";
            echo "Location: " . $project->location . "\n";
            echo "Status: " . $project->status . "\n";
            echo "Year: " . $project->year . "\n";
            echo "Units: " . $project->units . "\n";
            echo "Area: " . $project->area . "\n";
            echo "-------------------\n";
        }
        
        echo "Total projects: " . $projects->count() . "\n";
    }
}
