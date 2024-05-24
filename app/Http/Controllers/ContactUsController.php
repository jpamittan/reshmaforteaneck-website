<?php

namespace App\Http\Controllers;

use App\Http\Requests\{
    ContactUsPostRequest
};
use App\Models\{
    ContactUs
};
use Illuminate\Http\Request;
use Inertia\Inertia;

class ContactUsController extends Controller
{
    public function index()
    {
        return Inertia::render('Teaneck/ContactUs', []);
    }

    public function store(ContactUsPostRequest $request): ContactUs
    {
        $contactUs = ContactUs::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'message' => $request->message
        ]);

        return $contactUs;
    }
}
