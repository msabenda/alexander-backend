<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MissionSection; // Corrected model name
use Illuminate\Http\Request;

class MissionSectionController extends Controller
{
    public function index()
    {
        $missionSections = MissionSection::first();  // Fetch the first record, assuming there's only one

        return view('admin.mission.mission-section', compact('missionSections'));
    }

    public function update(Request $request)
    {
        // Validate the incoming data
        $request->validate([
            'mission' => 'required|string',
            'vision' => 'required|string',
            'team' => 'required|string',
        ]);

        // Find the first record in the database (assuming one record for mission section)
        $missionSections = MissionSection::first();

        if ($missionSections) {
            // Update the record
            $missionSections->update([
                'mission' => $request->mission,
                'vision' => $request->vision,
                'team' => $request->team,
            ]);
        } else {
            // Create a new record if none exists
            MissionSection::create([
                'mission' => $request->mission,
                'vision' => $request->vision,
                'team' => $request->team,
            ]);
        }

        // Redirect back with success message
        return redirect()->route('admin.mission.index')->with('success', 'Mission Section updated successfully.');
    }
}
