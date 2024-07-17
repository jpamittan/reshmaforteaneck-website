<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    public function index()
    {
        return Inertia::location("https://forms.gle/1qdDdDsuXQWEV9dC7");
    }
}
