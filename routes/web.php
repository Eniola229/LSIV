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
use App\Http\Controllers\Admin\BlogController;

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
Route::get('Work-Communication', [WorkWithUsController::class, 'Communication'])->name('Communication');
Route::get('Work-Branding', [WorkWithUsController::class, 'Branding'])->name('Branding');
Route::get('Work-Strategy', [WorkWithUsController::class, 'Strategy'])->name('Strategy');
Route::get('Work-Traning', [WorkWithUsController::class, 'Traning'])->name('Traning');
Route::get('Work-Engagement', [WorkWithUsController::class, 'Engagement'])->name('Engagement');
Route::get('Work-Program', [WorkWithUsController::class, 'Program'])->name('Program');


//initiatives
Route::get('Initiatives-Initiatives', [InitiativesController::class, 'initiatives'])->name('Initiatives');
Route::get('Initiatives-Adopt', [InitiativesController::class, 'Adopt'])->name('Adopt');
Route::get('Initiatives-MyBodyIsMine', [InitiativesController::class, 'MyBodyIsMine'])->name('MyBodyIsMine');
Route::get('Initiatives-Lolocythia', [InitiativesController::class, 'Lolocythia'])->name('Lolocythia');
Route::get('Initiatives-Nodaysoff', [InitiativesController::class, 'Nodaysoff'])->name('Nodaysoff');
Route::get('Initiatives-Storiesunhear', [InitiativesController::class, 'Storiesunhear'])->name('Storiesunhear');
Route::get('Initiatives-Conversation', [InitiativesController::class, 'Conversation'])->name('Conversation');


//Insights
Route::get('Insights-Case', [InsightsController::class, 'case'])->name('Case');
Route::get('Insights-Media', [InsightsController::class, 'media'])->name('media');

//Case Study
Route::get('client/blog/{id}', [HomeController::class, 'blog'])->name('client.blog.view');


//Admin
Route::get('/admin/login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('admin-login.post'); 

Route::post('upload-image', [BlogController::class, 'uploadImage'])->name('upload.image');
 
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

Route::get('/admin/blog', [BlogController::class, 'index'])->name('admin-blog'); 
Route::get('/admin/add-blog', [BlogController::class, 'blog'])->name('admin-add-blog'); 
Route::post('create-post', [BlogController::class, 'store'])->name('posts.create');
Route::get('admin/blog/{id}', [BlogController::class, 'view'])->name('admin.blog.view');
Route::get('admin/blog/edit/{id}', [BlogController::class, 'editblog'])->name('admin.blog.edit');
Route::delete('/admin/blog/delete/{id}', [BlogController::class, 'destroy'])->name('admin.blog.destroy');


Route::post('admin-logout', [AuthController::class, 'logout'])->name('admin-logout');
});