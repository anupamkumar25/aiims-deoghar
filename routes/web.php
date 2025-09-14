<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProcurementController;
use App\Http\Controllers\ContactController;

// Homepage
Route::get('/', [HomeController::class, 'index'])->name('home');

// About Us routes
Route::prefix('about')->name('about.')->group(function () {
    Route::get('/', function () { return view('about.index'); })->name('index');
    Route::get('/director-desk', function () { return view('about.director-desk'); })->name('director-desk');
    Route::get('/mission-vision', function () { return view('about.mission-vision'); })->name('mission-vision');
    Route::get('/administration', function () { return view('about.administration'); })->name('administration');
    Route::get('/annual-report', function () { return view('about.annual-report'); })->name('annual-report');
});

// Hospital Services routes
Route::prefix('hospital')->name('hospital.')->group(function () {
    Route::get('/', function () { return view('hospital.index'); })->name('index');
    Route::get('/opd', function () { return view('hospital.opd'); })->name('opd');
    Route::get('/ipd', function () { return view('hospital.ipd'); })->name('ipd');
    Route::get('/emergency', function () { return view('hospital.emergency'); })->name('emergency');
    Route::get('/blood-bank', function () { return view('hospital.blood-bank'); })->name('blood-bank');
});

// Academics routes
Route::prefix('academics')->name('academics.')->group(function () {
    Route::get('/', function () { return view('academics.index'); })->name('index');
    Route::get('/courses', [CourseController::class, 'index'])->name('courses');
    Route::get('/courses/{course}', [CourseController::class, 'show'])->name('courses.show');
    Route::get('/research', function () { return view('academics.research'); })->name('research');
});

// Departments routes
Route::get('/departments', [DepartmentController::class, 'index'])->name('departments.index');
Route::get('/departments/{department}', [DepartmentController::class, 'show'])->name('departments.show');

// Student Corner routes
Route::prefix('student')->name('student.')->group(function () {
    Route::get('/', function () { return view('student.index'); })->name('index');
    Route::get('/hostel', function () { return view('student.hostel'); })->name('hostel');
    Route::get('/library', function () { return view('student.library'); })->name('library');
    Route::get('/exam', function () { return view('student.exam'); })->name('exam');
    Route::get('/result', function () { return view('student.result'); })->name('result');
});

// Notices routes
Route::get('/notices', [NoticeController::class, 'index'])->name('notices.index');
Route::get('/notices/{notice}', [NoticeController::class, 'show'])->name('notices.show');

// Jobs routes
Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');
Route::get('/jobs/{job}', [JobController::class, 'show'])->name('jobs.show');

// Events routes
Route::get('/events', [EventController::class, 'index'])->name('events.index');
Route::get('/events/{event}', [EventController::class, 'show'])->name('events.show');

// Procurement routes
Route::get('/procurement', [ProcurementController::class, 'index'])->name('procurement.index');
Route::get('/procurement/{procurement}', [ProcurementController::class, 'show'])->name('procurement.show');

// Contact routes
Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Search route
Route::get('/search', function () { return view('search'); })->name('search');

require __DIR__.'/auth.php';
