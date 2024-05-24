<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ImportantDatesController extends Controller
{
    public function index()
    {
        return Inertia::render('Teaneck/ImportantDates', []);
    }
}
