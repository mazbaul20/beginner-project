<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectsController;

// start auth route
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
// end auth route


// start work
// page controller
Route::get('/',[HomeController::class,'page'])->name('home.page');
Route::get('/resume',[ResumeController::class,'page'])->name('resume.page');
Route::get('/project',[ProjectsController::class,'page'])->name('project.page');
Route::get('/contact',[ContactController::class,'page'])->name('contact.page');

// axaj call controller
// Home-Controller all route
Route::controller(HomeController::class)->group(function(){
    Route::get('/heroData','HeroData')->name('heroData');
    Route::get('/aboutData','AboutData')->name('aboutData');
    Route::get('/socialData','SocialData')->name('socialData');
});

// Resume-Controller all route
Route::controller(ResumeController::class)->group(function(){
    Route::get('/experienceData','ExperienceData')->name('experienceData');
    Route::get('/resumeLink','ResumeLink')->name('resumeLink');
    Route::get('/educationData','EducationData')->name('educationData');
    Route::get('/skillData','SkillData')->name('skillData');
    Route::get('/languageData','LanguageData')->name('languageData');
});

Route::get('/projectData',[ProjectsController::class,'ProjectData'])->name('projectData');
Route::post('/contactRequest',[ContactController::class,'ContactRequest'])->name('contactRequest');

// backend
Route::middleware(['auth','admin_role:admin'])->group(function(){
    Route::get('/admin/dashboard',[AdminController::class,'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout',[AdminController::class,'AdminLogout'])->name('admin.logout');
    // Hero-properties
    Route::get('/admin/dashboard/Hero-properties',[AdminController::class,'AdminHeroProperties'])->name('admin.Hero-properties');
    Route::get('/admin/dashboard/Hero-properties/{id}',[AdminController::class,'AdminHeroPropertiesEdit'])->name('admin.Hero-properties.edit');
    Route::post('/admin/dashboard/Hero-properties/update',[AdminController::class,'AdminHeroPropertiesUpdate'])->name('admin.Hero-properties.update');
});

// End


