<?php

namespace App\Http\Controllers\Admin;

use App\Models\PictureSection;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PictureController extends Controller
{
    // Show the list of picture sections for the admin
    public function index()
    {
        $pictures = PictureSection::all();
        return view('admin.pictures.index', compact('pictures')); // Assuming you have an 'admin.pictures.index' view
    }

    // Show the form to create a new picture
    public function create()
    {
        return view('admin.pictures.create'); // Assuming you have an 'admin.pictures.create' view
    }

    // Store a newly created picture section
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'image' => 'required|image',
        ]);

        $picture = new PictureSection();
        $picture->title = $request->title;
        $picture->image = $request->file('image')->store('pictures', 'public');
        $picture->save();

        return redirect()->route('admin.pictures.index')->with('success', 'Picture section created successfully!');
    }

    // Show the form to edit an existing picture section
    public function edit(PictureSection $picture)
    {
        return view('admin.pictures.edit', compact('picture')); // Assuming you have an 'admin.pictures.edit' view
    }

    // Update the picture section in the database
    public function update(Request $request, PictureSection $picture)
    {
        $request->validate([
            'title' => 'required|string',
            'image' => 'image',
        ]);

        $picture->title = $request->title;
        if ($request->hasFile('image')) {
            $picture->image = $request->file('image')->store('pictures', 'public');
        }
        $picture->save();

        return redirect()->route('admin.pictures.index')->with('success', 'Picture section updated successfully!');
    }

    // Delete a picture section
    public function destroy(PictureSection $picture)
    {
        $picture->delete();

        return redirect()->route('admin.pictures.index')->with('success', 'Picture section deleted successfully!');
    }
}
