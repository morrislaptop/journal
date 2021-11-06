<?php

use Illuminate\Support\Facades\Route;

Route::view('/journal', 'journal::dashboard')->middleware('web');
Route::view('/journal/events', 'journal::events')->middleware('web');
