<?php

use App\Http\Controllers\{
    ActBlueController,
    CommunityController,
    ContactUsController,
    EventsController,
    HomeController,
    ImportantDatesController,
    VolunteerController
};
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/act-blue', [ActBlueController::class, 'index'])->name('act-blue.index');
Route::get('/events', [EventsController::class, 'index'])->name('events.index');
Route::get('/volunteer', [VolunteerController::class, 'index'])->name('volunteer.index');
Route::get('/community', [CommunityController::class, 'index'])->name('community.index');
Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact-us.index');
Route::get('/important-dates', [ImportantDatesController::class, 'index'])->name('important-dates.index');
