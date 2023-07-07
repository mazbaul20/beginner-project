<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\backend\AboutsController;
use App\Http\Controllers\backend\SkillsController;
use App\Http\Controllers\backend\ProjectController;
use App\Http\Controllers\backend\LanguageController;
use App\Http\Controllers\backend\EducationsController;
use App\Http\Controllers\backend\ExperienceController;
use App\Http\Controllers\backend\SocialLinkController;

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
    
    // Home Hero-properties
    Route::get('/admin/dashboard/Hero-properties',[AdminController::class,'AdminHeroProperties'])->name('admin.Hero-properties');
    Route::get('/admin/dashboard/Hero-properties/create',[AdminController::class,'AdminHeroPropertiesCreate'])->name('admin.Hero-properties.create');
    Route::post('/admin/dashboard/Hero-properties/store',[AdminController::class,'AdminHeroPropertiesStore'])->name('admin.Hero-properties.store');
    Route::get('/admin/dashboard/Hero-properties/{id}',[AdminController::class,'AdminHeroPropertiesEdit'])->name('admin.Hero-properties.edit');
    Route::post('/admin/dashboard/Hero-properties/update',[AdminController::class,'AdminHeroPropertiesUpdate'])->name('admin.Hero-properties.update');
    Route::delete('/admin/dashboard/Hero-properties',[AdminController::class,'AdminHeroPropertiesDelete'])->name('admin.Hero-properties.delete');

    // Home abouts
    Route::controller(AboutsController::class)->group(function(){
        Route::get('/admin/dashboard/abouts','index')->name('admin.abouts');
        Route::get('/admin/dashboard/abouts/create','create')->name('admin.abouts.create');
        Route::post('/admin/dashboard/abouts/store','store')->name('admin.abouts.store');
        Route::get('/admin/dashboard/abouts/{id}','show')->name('admin.abouts.edit');
        Route::post('/admin/dashboard/abouts/update','update')->name('admin.abouts.update');
        Route::delete('/admin/dashboard/abouts/delete','destroy')->name('admin.abouts.delete');
    });

    // Home social-links
    Route::controller(SocialLinkController::class)->group(function(){
        Route::get('/admin/dashboard/social-links','index')->name('admin.social-links');
        Route::get('/admin/dashboard/social-links/create','create')->name('admin.social-links.create');
        Route::post('/admin/dashboard/social-links/store','store')->name('admin.social-links.store');
        Route::get('/admin/dashboard/social-links/edit/{id}','show')->name('admin.social-links.show');
        Route::post('/admin/dashboard/social-links/update','update')->name('admin.social-links.update');
        Route::delete('/admin/dashboard/social-links/delete','destroy')->name('admin.social-links.delete');
    });

    // Resume-Experience
    Route::controller(ExperienceController::class)->group(function(){
        Route::get('/admin/dashboard/experience','index')->name('admin.experience');
        Route::get('/admin/dashboard/experience/create','create')->name('admin.experience.create');
        Route::post('/admin/dashboard/experience/store','store')->name('admin.experience.store');
        Route::get('/admin/dashboard/experience/edit/{id}','show')->name('admin.experience.edit');
        Route::post('/admin/dashboard/experience/update','update')->name('admin.experience.update');
        Route::delete('/admin/dashboard/experience/delete','destroy')->name('admin.experience.delete');
    });
    // Resume-Educations
    Route::controller(EducationsController::class)->group(function(){
        Route::get('/admin/dashboard/education','index')->name('admin.educations');
        Route::get('/admin/dashboard/education/create','create')->name('admin.educations.create');
        Route::post('/admin/dashboard/education/store','store')->name('admin.educations.store');
        Route::get('/admin/dashboard/education/edit/{id}','show')->name('admin.educations.edit');
        Route::post('/admin/dashboard/education/update','update')->name('admin.educations.update');
        Route::delete('/admin/dashboard/education/delete','destroy')->name('admin.educations.delete');
    });
    // Resume-Skills
    Route::controller(SkillsController::class)->group(function(){
        Route::get('/admin/dashboard/skill','index')->name('admin.skill');
        Route::get('/admin/dashboard/skill/create','create')->name('admin.skill.create');
        Route::post('/admin/dashboard/skill/store','store')->name('admin.skill.store');
        Route::get('/admin/dashboard/skill/edit/{id}','show')->name('admin.skill.edit');
        Route::post('/admin/dashboard/skill/update','update')->name('admin.skill.update');
        Route::delete('/admin/dashboard/skill/delete','destroy')->name('admin.skill.delete');
    });
    // Resume-Languages
    Route::controller(LanguageController::class)->group(function(){
        Route::get('/admin/dashboard/language','index')->name('admin.language');
        Route::get('/admin/dashboard/language/create','create')->name('admin.language.create');
        Route::post('/admin/dashboard/language/store','store')->name('admin.language.store');
        Route::get('/admin/dashboard/language/edit/{id}','show')->name('admin.language.edit');
        Route::post('/admin/dashboard/language/update','update')->name('admin.language.update');
        Route::delete('/admin/dashboard/language/delete','destroy')->name('admin.language.delete');
    });
    // Project-Projects
    Route::controller(ProjectController::class)->group(function(){
        Route::get('/admin/dashboard/project','index')->name('admin.project');
        Route::get('/admin/dashboard/project/create','create')->name('admin.project.create');
        Route::post('/admin/dashboard/project/store','store')->name('admin.project.store');
        Route::get('/admin/dashboard/project/edit/{id}','show')->name('admin.project.edit');
        Route::post('/admin/dashboard/project/update','update')->name('admin.project.update');
        Route::delete('/admin/dashboard/project/delete','destroy')->name('admin.project.delete');
    });
});

// End


