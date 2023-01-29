<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
            'body' => 'required',
        ]);

        Mail::to('hwilliams@luminoushilt.com')->send(new ContactFormMail($data));

        return redirect('/Contact')
            ->with('message', 'Email sent!');
    }
}
