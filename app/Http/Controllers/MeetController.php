<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class MeetController extends Controller
{
    public function index()
    {
        return Inertia::render('Teaneck/Meet', []);
    }
}
