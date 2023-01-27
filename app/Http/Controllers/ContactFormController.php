<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function index()
    {
        return view('Contact.index');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Mail::to('hwilliams@luminoushilt.com')->send(new ContactFormMail($data));

        return redirect('/Contact')
            ->with('message', 'Email sent!');
    }
}
