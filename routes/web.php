<?php

use Illuminate\Support\Facades\Route;
//ABOUT
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\WorkWithUsController;
use App\Http\Controllers\Front\InitiativesController;
use App\Http\Controllers\Front\InsightsController;


//HOME
Route::get('/', [HomeController::class, 'index']);
Route::get('home', [HomeController::class, 'index'])->name('home');

//ABOUT
Route::get('About-WhoWeAre', [AboutController::class, 'whoweare'])->name('whoweare');
Route::get('About-OurJouney', [AboutController::class, 'ourjouney'])->name('ourjouney');
Route::get('About-Thematics', [AboutController::class, 'thematics'])->name('Thematics');
Route::get('About-Founder', [AboutController::class, 'founder'])->name('Founder');

//WHO WHE WORK WITH
Route::get('Work-Services', [WorkWithUsController::class, 'service'])->name('Services');
Route::get('Work-Work', [WorkWithUsController::class, 'work'])->name('Work');

//initiatives
Route::get('Initiatives-Initiatives', [InitiativesController::class, 'initiatives'])->name('Initiatives');

//Insights
Route::get('Insights-Case', [InsightsController::class, 'case'])->name('Case');
Route::get('Insights-Media', [InsightsController::class, 'media'])->name('media');
