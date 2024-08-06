<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class TalksController extends Controller
{
    public function index()
    {
        return Inertia::render('Teaneck/Talks', []);
    }
}
