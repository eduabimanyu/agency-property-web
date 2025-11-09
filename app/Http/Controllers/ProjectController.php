<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $status = $request->get('status');
        
        $query = Project::latest();
        
        if ($status) {
            $query->where('status', $status);
        }
        
        $projects = $query->get();
        
        // Get all distinct statuses for filter options
        $statuses = Project::select('status')->distinct()->get()->pluck('status')->toArray();
        
        return view('projects.index', compact('projects', 'statuses', 'status'));
    }
    
    public function show(Project $project)
    {
        // Debugging: Check if project is found and gallery_images is properly formatted
        if (!$project) {
            abort(404);
        }
        
        // Ensure gallery_images is an array
        if ($project->gallery_images && !is_array($project->gallery_images)) {
            $project->gallery_images = json_decode($project->gallery_images, true);
        }
        
        return view('projects.show', compact('project'));
    }
    
    public function downloadBrochure(Project $project)
    {
        // Check if the project has an e_brochure
        if (!$project->e_brochure) {
            abort(404, 'Brochure not found');
        }

        // Check if the file exists in storage
        if (!Storage::exists($project->e_brochure)) {
            abort(404, 'Brochure file not found');
        }

        // Return the file for download
        return Storage::download($project->e_brochure, basename($project->e_brochure));
    }
}