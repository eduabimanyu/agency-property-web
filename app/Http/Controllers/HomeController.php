<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Property;
use App\Models\Hero;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index()
    {
        // Cache the queries for 15 minutes to reduce database load
        $hero = Cache::remember('home_hero', 900, function () {
            return Hero::first();
        });

        $projects = Cache::remember('home_projects', 900, function () {
            return Project::latest()->take(6)->get();
        });

        $properties = Cache::remember('home_properties', 900, function () {
            return Property::with('propertyCategory')->latest()->take(6)->get();
        });
        
        return view('welcome', compact('hero', 'projects', 'properties'));
    }
}