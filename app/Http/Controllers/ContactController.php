<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required','string','max:255'],
            'email' => ['required','email','max:255'],
            'phone' => ['required','string','max:30'],
            'subject' => ['required','string','max:255'],
            'message' => ['required','string','max:5000'],
        ]);

        $validated['status'] = 'pending';
        Contact::create($validated);

        return redirect()->route('contact.create')->with('status', 'Thank you! Your message has been received.');
    }
}
