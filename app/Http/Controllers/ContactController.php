<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'nullable|string'
        ]);

        Contact::create($validated);
        return back()->with('success', 'Your message has been received successfully! We will get back to you soon.');
    }
}
