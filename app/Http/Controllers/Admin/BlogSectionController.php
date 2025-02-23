<?php

// app/Http/Controllers/Admin/BlogSectionController.php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogSection;
use Illuminate\Http\Request; // Add this line

class BlogSectionController extends Controller
{
    public function index()
    {
        $blogs = BlogSection::all(); // Fetch all blogs
        return view('admin.blog-section.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blog-section.create');
    }

    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image',
        ]);

        // Store the uploaded image
        $imagePath = $request->file('image')->store('blogs', 'public');

        // Create the new blog section
        BlogSection::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.blog-sections.index');
    }
}
