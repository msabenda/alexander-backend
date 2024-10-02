<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmitted;
use Purifier; // Import the Purifier facade

class ContactController extends Controller
{
    public function store(Request $request) {
        // Define validation rules
        $validated = $request->validate([
            'name' => ['required', 'regex:/^[a-zA-Z\s]+$/', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'digits:10'],
            'service' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:500']
        ], [
            'name.regex' => 'The name may only contain letters and spaces.',
            'phone.digits' => 'The phone number must be exactly 10 digits.',
        ]);

        // Sanitize the message input using Purifier
        $sanitizedMessage = Purifier::clean($validated['message']);

        // Insert data into database with sanitized message
        Contact::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'service' => $validated['service'],
            'message' => $sanitizedMessage,
        ]);

        // Send email with sanitized message
        Mail::to('msa2benda@gmail.com')->send(new ContactFormSubmitted([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'service' => $validated['service'],
            'message' => $sanitizedMessage,
        ]));

        // Redirect with success message and scroll target
        return redirect()->route('home')
        ->with('success', 'Your message has been sent successfully!')
        ->with('contactSubmitted', true); // Set session variable
    }
}
