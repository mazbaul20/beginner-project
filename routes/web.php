<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;

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
Route::get('/dashboard',[DashboardController::class,'Dashboard']);
