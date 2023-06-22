<?php

use App\Http\Controllers\ContactController;
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
Route::get('/heroData',[HomeController::class,'HeroData']);
Route::get('/aboutData',[HomeController::class,'AboutData']);
Route::get('/socialData',[HomeController::class,'SocialData']);

Route::get('/experienceData',[ResumeController::class,'ExperienceData']);
Route::get('/resumeLink',[ResumeController::class,'ResumeLink']);
Route::get('/educationData',[ResumeController::class,'EducationData']);
Route::get('/skillData',[ResumeController::class,'SkillData']);
Route::get('/languageData',[ResumeController::class,'LanguageData']);

Route::get('/projectData',[ProjectsController::class,'ProjectData']);
Route::post('/contactRequest',[ContactController::class,'ContactRequest']);

