<?php

use Illuminate\Support\Facades\Route;

Route::view('/journal', 'journal::journal')->middleware('web');
