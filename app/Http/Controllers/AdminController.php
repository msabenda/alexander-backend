<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() 
    {
        $contacts = Contact::all();  // It retrieves all data from database
        return view('admin.index', compact('contacts')); // It passes the data to the view
    }
}
