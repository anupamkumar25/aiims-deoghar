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
use App\Http\Controllers\Admin\NoticeController as AdminNoticeController;
use App\Http\Controllers\Admin\EventController as AdminEventController;
use App\Http\Controllers\Admin\JobController as AdminJobController;
use App\Http\Controllers\Admin\GalleryImageController as AdminGalleryController;
use App\Http\Controllers\Admin\DepartmentController as AdminDepartmentController;
use App\Http\Controllers\CourseController as AdminCourseController;
use App\Http\Controllers\ProcurementController as AdminProcurementController;

use App\Livewire\aboutUs\DirectorDesk;
Route::get('/', DirectorDesk::class)->name('index');


// Homepage
Route::get('/', [HomeController::class, 'index'])->name('home');

// About Us routes
Route::prefix('about')->name('about.')->group(function () {
    Route::get('/', function () { return view('about.index'); })->name('index');
    // Route::get('/director-desk', function () { return view('about.director-desk'); })->name('director-desk') ;
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

// Admin dedicated login (always available to guests)
Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('login', [\App\Http\Controllers\Admin\AuthController::class, 'showLogin'])->name('login');
        Route::post('login', [\App\Http\Controllers\Admin\AuthController::class, 'login'])->name('login.attempt');
    });
});

// Admin routes
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', \App\Http\Controllers\Admin\DashboardController::class)->name('dashboard');

    // Notices (admin)
    Route::get('/notices', [AdminNoticeController::class, 'index'])->name('notices.index');
    Route::get('/notices/create', [AdminNoticeController::class, 'create'])->name('notices.create');
    Route::post('/notices', [AdminNoticeController::class, 'store'])->name('notices.store');
    Route::get('/notices/{notice}/edit', [AdminNoticeController::class, 'edit'])->name('notices.edit');
    Route::put('/notices/{notice}', [AdminNoticeController::class, 'update'])->name('notices.update');
    Route::delete('/notices/{notice}', [AdminNoticeController::class, 'destroy'])->name('notices.destroy');

    // Events
    Route::resource('events', AdminEventController::class)->names('events');
    // Jobs
    Route::resource('jobs', AdminJobController::class)->names('jobs');
    // Gallery
    Route::resource('gallery', AdminGalleryController::class)->parameters(['gallery' => 'gallery'])->names('gallery');
    Route::resource('departments', AdminDepartmentController::class)->names('departments');
    Route::get('/courses', [AdminCourseController::class, 'index'])->name('courses.index');
    Route::get('/procurements', [AdminProcurementController::class, 'index'])->name('procurements.index');
    // Profile
    Route::get('/profile', [\App\Http\Controllers\Admin\ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [\App\Http\Controllers\Admin\ProfileController::class, 'update'])->name('profile.update');
});
