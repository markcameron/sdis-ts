<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormSubmission;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        return view('front.contact');
    }

    public function submit(ContactRequest $request)
    {
        Mail::to('mark.cameron@sdis-ts.ch')->send(new ContactFormSubmission($request->validated()));

        return redirect()->back()->with('success', 'Merci pour votre soumission!');
    }
}
