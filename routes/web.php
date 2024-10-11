<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrganizerController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventCategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('organizers', OrganizerController::class);
Route::resource('events', EventController::class);
Route::resource('eventcategories', EventCategoryController::class);
