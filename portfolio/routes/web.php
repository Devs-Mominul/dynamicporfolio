<?php


use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Testomonials;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ResumebackendController;
use App\Models\AboutMe;
use App\Models\WhatDo;
use App\Models\Testomonial;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $resume=AboutMe::all();
    $whatdo=WhatDo::all();
    $testomonials=Testomonial::all();
    return view('welcome',[
        'aboutme_data'=>$resume,
        'whatdo'=>$whatdo,
        'testomonials'=>$testomonials
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/admin',[DashboardController::class,'dashboard']);
Route::post('/photo',[DashboardController::class,'dashboard_photo'])->name('photo.update');
//resume details
Route::get('/resume/backend',[HomeController::class,'resume'])->name('resume.backend');
// Route::get('/resume/{id}',[HomeController::class,'resume_delete'])->name('resume.delete');
Route::post('/resume/store',[HomeController::class,'resume_store'])->name('resume.store');

Route::get('/resume/view/{id}',[HomeController::class,'resume_view'])->name('resume.view');
Route::post('/resume/vie/{id}',[HomeController::class,'resume_update_store'])->name('resume_update.store');
Route::get('/aboutme',[AboutMeController::class,'aboutme'])->name('aboutme');
Route::post('/aboutme',[AboutMeController::class,'aboutme_store'])->name('aboutme.store');
Route::post('/whatdo',[AboutMeController::class,'whatdo_store'])->name('whatdo.store');
Route::get('/testomonial',[Testomonials::class,'testomonials_controller'])->name('testomonial');
Route::post('/testomonial',[Testomonials::class,'testomonials_controller_store'])->name('testomonial.store');
Route::get('/abouts',[FrontendController::class,'about'])->name('about');
Route::get('/resume/frontend',[FrontendController::class,'resume_frontend'])->name('resume_frontend');
Route::get('/work',[FrontendController::class,'work'])->name('work');
Route::get('/contact',[FrontendController::class,'contact'])->name('contact');
Route::post('/aboutme/whatdo',[AboutMeController::class,'aboutme_store_whatdo'])->name('whatdo');
Route::get('/resume_education',[ResumebackendController::class,'resume_education'])->name('resume.education');
Route::post('/resume_education/store',[ResumebackendController::class,'resume_education_store'])->name('resume.education.store');
Route::get('/resume_exprience',[ResumebackendController::class,'resume_expreince'])->name('resume.expreince');
Route::post('/resume_exprience',[ResumebackendController::class,'resume_expreince_store'])->name('resume.expreince.store');
Route::post('/resume_skill',[ResumebackendController::class,'resume_skill_store'])->name('resume.skill.store');
Route::post('/contact',[ContactController::class,'contact'])->name('contact.store');

require __DIR__.'/auth.php';
