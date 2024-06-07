<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ActBlueController extends Controller
{
    public function index()
    {
        return Inertia::location("https://secure.actblue.com/donate/khan-for-council-1");
    }
}
