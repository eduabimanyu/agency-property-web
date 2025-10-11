<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hero;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $heroes = Hero::all();
        return view('admin.heroes.index', compact('heroes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.heroes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'cta_text' => 'nullable|string|max:255',
            'cta_link' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $hero = new Hero($request->except('image'));

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('storage'), $imageName);
            $hero->image = $imageName;
        }

        $hero->save();

        return redirect()->route('heroes.index')->with('success', 'Hero created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hero $hero)
    {
        return view('admin.heroes.edit', compact('hero'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hero $hero)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'cta_text' => 'nullable|string|max:255',
            'cta_link' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $hero->fill($request->except('image'));

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($hero->image && file_exists(public_path('storage/'.$hero->image))) {
                unlink(public_path('storage/'.$hero->image));
            }
            
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('storage'), $imageName);
            $hero->image = $imageName;
        }

        $hero->save();

        return redirect()->route('heroes.index')->with('success', 'Hero updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hero $hero)
    {
        // Delete image if exists
        if ($hero->image && file_exists(public_path('storage/'.$hero->image))) {
            unlink(public_path('storage/'.$hero->image));
        }
        
        $hero->delete();

        return redirect()->route('heroes.index')->with('success', 'Hero deleted successfully.');
    }
}
