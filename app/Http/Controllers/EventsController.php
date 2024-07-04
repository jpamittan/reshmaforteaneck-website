<?php

namespace App\Http\Controllers;

use App\Models\{
    Event
};
use Illuminate\Http\Request;
use Inertia\Inertia;

class EventsController extends Controller
{
    public function index()
    {
        $events = Event::all();

        return Inertia::render('Teaneck/Events', [
            'events' => $events,
        ]);
    }
}
