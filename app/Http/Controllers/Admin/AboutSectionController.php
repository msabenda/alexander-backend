<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutSection;
use Illuminate\Http\Request;

class AboutSectionController extends Controller
{
    public function index()
    {
        $aboutSection = AboutSection::latest()->first(); // Get the latest About section content
        return view('admin.about-section', compact('aboutSection'));
    }

    public function update(Request $request, $id)
    {
        $aboutSection = AboutSection::findOrFail($id);
        
        // Validate and update the content
        $aboutSection->update([
            'title' => $request->title,
            'description' => $request->description,
            'quote' => $request->quote,
            'author' => $request->author,
            'image_path' => $request->file('image_path')->store('about', 'public'), // Store image
        ]);

        return redirect()->route('admin.about-section.index')->with('success', 'About Section updated successfully');
    }
}
