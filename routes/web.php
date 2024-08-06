<?php

use App\Http\Controllers\{
    AdminController,
    ActBlueController,
    CommunityController,
    ContactUsController,
    EventsController,
    HomeController,
    ImportantDatesController,
    TalksController,
    VolunteerController
};
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::prefix('admin')->group(function () {
        Route::get('/contact-us', [AdminController::class, 'contactUs'])->name('admin.contactUs');
        Route::get('/event', [AdminController::class, 'addEvent'])->name('admin.addEvent');
        Route::get('/event/{event}', [AdminController::class, 'viewEvent'])->name('admin.viewEvent');
        Route::post('/event', [AdminController::class, 'createEvent'])->name('admin.createEvent');
        Route::put('/event/{event}', [AdminController::class, 'updateEvent'])->name('admin.updateEvent');
        Route::delete('/event/{event}', [AdminController::class, 'deleteEvent'])->name('admin.deleteEvent');
    });
});

Route::get('/register', [AdminController::class, 'register'])->name('admin.register');
Route::post('/register', [AdminController::class, 'saveUser'])->name('admin.saveUser');

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/act-blue', [ActBlueController::class, 'index'])->name('act-blue.index');
Route::get('/events', [EventsController::class, 'index'])->name('events.index');
Route::get('/talks', [TalksController::class, 'index'])->name('talks.index');
Route::get('/volunteer', [VolunteerController::class, 'index'])->name('volunteer.index');
Route::get('/community', [CommunityController::class, 'index'])->name('community.index');
Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact-us.index');
Route::get('/important-dates', [ImportantDatesController::class, 'index'])->name('important-dates.index');
