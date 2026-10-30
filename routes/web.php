<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminCalendarController;
use App\Http\Controllers\AdminFormController;
use App\Http\Controllers\AdminSweetalertController;
use App\Http\Controllers\AdminDatatableController;
use App\Http\Controllers\AdminSigninController;

// Routes Landing Page (iStudio - 6 Halaman)
Route::get('/', [HomeController::class, 'index'])->name('Home');
Route::get('/about', [AboutController::class, 'index'])->name('About');
Route::get('/service', [ServiceController::class, 'index'])->name('Service');
Route::get('/project', [ProjectController::class, 'index'])->name('Project');
Route::get('/feature', [FeatureController::class, 'index'])->name('Feature');
Route::get('/contact', [ContactController::class, 'index'])->name('Contact');

// Routes Admin Template (Urbix - 6 Halaman)
Route::get('/admin-dashboard', [AdminController::class, 'index'])->name('AdminDashboard');
Route::get('/admin-calendar', [AdminCalendarController::class, 'index'])->name('AdminCalendar');
Route::get('/admin-form', [AdminFormController::class, 'index'])->name('AdminForm');
Route::get('/admin-sweetalert', [AdminSweetalertController::class, 'index'])->name('AdminSweetalert');
Route::get('/admin-datatable', [AdminDatatableController::class, 'index'])->name('AdminDatatable');
Route::get('/admin-signin', [AdminSigninController::class, 'index'])->name('AdminSignin');
