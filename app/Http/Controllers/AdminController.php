<?php

namespace App\Http\Controllers;

use App\Actions\Fortify\{
    CreateNewUser
};
use App\Models\{
    ContactUs,
    Event,
};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Inertia\Inertia;

class AdminController extends Controller
{
    public function dashboard()
    {
        $events = Event::orderBy('event_date', 'desc')
            ->get();

        return Inertia::render('Events', [
            'events' => $events,
        ]);
    }

    public function register()
    {
        return Inertia::render('Auth/Register');
    }

    public function saveUser(Request $request)
    {
        $createNewUser = new CreateNewUser();
        $user = $createNewUser->create($request->all());

        if ($user) {
            Session::flash('message', 'Registered successfully. Please login now.'); 

            return to_route('login');
        } else {
            return to_route('register');
        }
    }

    public function addEvent()
    {
        return Inertia::render('AddEventForm');
    }

    public function viewEvent(Event $event)
    {
        return Inertia::render('UpdateEventForm', [
            'eventObj' => $event,
        ]);
    }

    public function createEvent(Request $request)
    {
        $event = new Event();
        $event->title = $request->input('title');
        $event->details = $request->input('details');
        $event->event_date = $request->input('event_date');
        $images = [];

        if ($request->has('images')) {
            foreach ($request->file('images') as $image) {
                if($image['file']->isValid()) {
                    $filename = (explode(".", $image['file']->getClientOriginalName()))[0];
                    $ext = $image['file']->getClientOriginalExtension();
                    $time = uniqid();
                    $uploadName = "${filename}_${time}.${ext}";
                    $uploadPath = 'app/public/assets/events/';
                    $uploadURL = "${uploadPath}${uploadName}";
                    $images[] = $uploadName;
                    $image['file']->move(storage_path($uploadPath), $uploadURL);
                }
            }
        }

        $event->images = $images;
        $event->videos = [];
        $event->save();

        return to_route('dashboard');
    }

    public function updateEvent(Event $event, Request $request)
    {
        $event->title = $request->input('title');
        $event->details = $request->input('details');
        $event->event_date = $request->input('event_date');
        $images = [];

        foreach ($request->input('images') as $image) {
            if(is_string($image)) {
                $images[] = $image;
            }
        }

        if ($request->has('new_images') && $request->file('new_images') !== null) {
            foreach ($request->file('new_images') as $image) {
                if($image['file']->isValid()) {
                    $filename = (explode(".", $image['file']->getClientOriginalName()))[0];
                    $ext = $image['file']->getClientOriginalExtension();
                    $time = uniqid();
                    $uploadName = "${filename}_${time}.${ext}";
                    $uploadPath = 'app/public/assets/events/';
                    $uploadURL = "${uploadPath}${uploadName}";
                    $images[] = $uploadName;
                    $image['file']->move(storage_path($uploadPath), $uploadURL);
                }
            }
        }

        $event->images = $images;
        $event->videos = [];
        $event->save();

        return to_route('dashboard');
    }

    public function deleteEvent(Event $event)
    {
        $event->delete();

        return to_route('dashboard');
    }

    public function contactUs()
    {
        $contactUs = ContactUs::orderBy('id', 'desc')
            ->get();

        return Inertia::render('ContactUs', [
            'contactUs' => $contactUs,
        ]);
    }
}
