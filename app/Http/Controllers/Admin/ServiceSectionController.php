<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceSectionController extends Controller
{
    public function index()
    {
        $services = ServiceSection::all(); // Fetch all services
        return view('admin.services.index', compact('services'));
    }

    public function edit($id)
    {
        $service = ServiceSection::findOrFail($id);
        return view('admin.service.service-section', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $service = ServiceSection::findOrFail($id);
    
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($service->image && \Storage::disk('public')->exists($service->image)) {
                \Storage::disk('public')->delete($service->image);
            }
    
            // Store the new image
            $imagePath = $request->file('image')->store('services', 'public');
            $service->image = $imagePath;
        }
    
        // Update title and description
        $service->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $service->image, // Ensure the new image is saved
        ]);
    
        return redirect()->route('admin.services.index')->with('success', 'Service updated successfully.');
    }
    
}
