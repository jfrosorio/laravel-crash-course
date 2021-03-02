<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\ContactRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => [
                'required',
                'email'
            ],
            'phone' => 'nullable',
            'message' => 'required',
        ]);

        $contactRequest = ContactRequest::create($validated);

        // Send email to admin
        Mail::to('admin@app.dev')->send(new ContactMail($contactRequest));

        // We can use the request's session or we can attach it to the redirect (see return statement)
//        $request->session()->flash('message', 'Success!');

        return redirect()->back()
            ->with('message', 'Success!');
    }
}
