<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormSubmission;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;
use A17\Twill\Repositories\SettingRepository;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        return view('front.contact', [
            'telephone' => app(SettingRepository::class)->byKey('phone_number'),
            'telephoneLink' => app(SettingRepository::class)->byKey('phone_number_link'),
            'email' => app(SettingRepository::class)->byKey('email_contact'),
            'address' => nl2br(app(SettingRepository::class)->byKey('address')),
        ]);
    }

    public function submit(ContactRequest $request)
    {
        Mail::to('mark.cameron@sdis-ts.ch')->send(new ContactFormSubmission($request->validated()));

        return redirect()->back()->with('success', 'Merci pour votre soumission!');
    }
}
