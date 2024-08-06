<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ActBlueController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('amount')) {
            $amount = $request->get('amount');
            return Inertia::location("https://secure.actblue.com/donate/khan-for-council-1?amount={$amount}");
        }

        return Inertia::location("https://secure.actblue.com/donate/khan-for-council-1");
    }
}
