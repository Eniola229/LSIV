<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Front\AboutController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('About-WhoWeAre', [AboutController::class, 'whoweare'])->name('whoweare');