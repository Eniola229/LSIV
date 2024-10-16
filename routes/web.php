<?php

use Illuminate\Support\Facades\Route;
//FRONT
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\WorkWithUsController;
use App\Http\Controllers\Front\InitiativesController;
use App\Http\Controllers\Front\InsightsController;

//ADMIN
use App\Http\Controllers\Admin\AuthController;

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
Route::get('Initiatives-MyBodyIsMine', [InitiativesController::class, 'MyBodyIsMine'])->name('MyBodyIsMine');
Route::get('Initiatives-Lolocythia', [InitiativesController::class, 'Lolocythia'])->name('Lolocythia');
Route::get('Initiatives-Nodaysoff', [InitiativesController::class, 'Nodaysoff'])->name('Nodaysoff');
Route::get('Initiatives-Storiesunhear', [InitiativesController::class, 'Storiesunhear'])->name('Storiesunhear');
Route::get('Initiatives-Conversation', [InitiativesController::class, 'Conversation'])->name('Conversation');


//Insights
Route::get('Insights-Case', [InsightsController::class, 'case'])->name('Case');
Route::get('Insights-Media', [InsightsController::class, 'media'])->name('media');


//Admin
Route::get('/admin/login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('admin-login.post'); 

 
Route::group([
    "middleware" => ["auth:admins"]
], function(){
//VIEW ADMINs
Route::get('/admin/register', [AuthController::class, 'register'])->name('admin-register'); 
//REGISTER OR UPDATE ADMIN
Route::post('/admin/register/{id?}', [AuthController::class, 'postRegistration'])->name('admin.postRegistration');
// Route::post('post-register', [AuthController::class, 'postRegistration'])->name('admin-register.post'); 
//EDIT VIEW ADMIN
Route::get('/admin/edit/{id}', [AuthController::class, 'edit'])->name('admin.edit');
//DELETE ADMIN
Route::delete('/admin/{id}', [AuthController::class, 'destroy'])->name('admin.destroy');
//CREATE OR REGISTER ADMIN
Route::get('/add/admin', [AuthController::class, 'addAdmin'])->name('admin-add-admin');
//ADMIN DASHBOARD
Route::get('/admin/dashboard', [AuthController::class, 'dashboard'])->name('admin-dashboard'); 


Route::get('admin-logout', [AuthController::class, 'logout'])->name('admin-logout');
});