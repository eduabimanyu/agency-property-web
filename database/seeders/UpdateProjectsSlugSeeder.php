<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Project;

class UpdateProjectsSlugSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Update projects with empty or null slugs
        $projects = Project::whereNull('slug')
                    ->orWhere('slug', '')
                    ->get();
        
        foreach ($projects as $project) {
            $project->slug = Str::slug($project->name);
            $project->save();
        }
        
        // Ensure all projects have unique slugs
        $allProjects = Project::all();
        foreach ($allProjects as $project) {
            $originalSlug = $project->slug;
            $count = 1;
            
            // Check if slug already exists
            while (Project::where('slug', $project->slug)->where('id', '!=', $project->id)->exists()) {
                $project->slug = $originalSlug . '-' . $count;
                $count++;
            }
            
            if ($project->isDirty('slug')) {
                $project->save();
            }
        }
    }
}
