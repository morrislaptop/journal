<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'domain' => config('journal.domain', null),
    'prefix' => config('journal.path'),
    'middleware' => config('journal.middleware'),
], function () {
    Route::view('/', 'journal::dashboard');
});
