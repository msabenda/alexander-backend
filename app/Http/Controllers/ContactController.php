<?php

namespace App\Http\Controllers;

use App\Models\Contact;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmitted;


class ContactController extends Controller
{
    public function store(Request $request) {
        $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email'=> 'required|email|max:255',
        'phone' => 'required|string|max:255',
        'service' => 'required|string|max:255',
        'message' => 'required|string|max:500'

        ]);

        // Insert data into database
        Contact::create($validated);

        // Send email
        Mail::to('msa2benda@gmail.com')->send(new ContactFormSubmitted($validated));

        return redirect()->to(url()->previous() . '#contact')->with('success', 'Your message has been sent! Thank You We will reach you back !');
        
    }
}
