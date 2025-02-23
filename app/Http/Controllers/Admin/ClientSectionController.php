<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ClientSection;

class ClientSectionController extends Controller
{
    public function index()
    {
        $clients = ClientSection::all(); // Fetch all client logos
        return view('admin.client.client-section', compact('clients'));
    }
}

