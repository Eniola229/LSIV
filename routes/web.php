<?php

use Illuminate\Support\Facades\Route;
//ABOUT
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\HomeController;

//HOME
Route::get('/', [HomeController::class, 'index']);

//ABOUT
Route::get('About-WhoWeAre', [AboutController::class, 'whoweare'])->name('whoweare');
Route::get('About-OurJouney', [AboutController::class, 'ourjouney'])->name('ourjouney');