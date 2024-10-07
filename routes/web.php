<?php

use Illuminate\Support\Facades\Route;
//ABOUT
use App\Http\Controllers\Front\AboutController;

Route::get('/', function () {
    return view('welcome');
});

//ABOUT
Route::get('About-WhoWeAre', [AboutController::class, 'whoweare'])->name('whoweare');
Route::get('About-OurJouney', [AboutController::class, 'ourjouney'])->name('ourjouney');