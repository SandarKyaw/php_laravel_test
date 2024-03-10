<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\AppointmentsController;

Route::redirect('/', 'loginPage');
Route::get('/loginPage',[AuthController::class, 'loginPage'])->name('auth#loginPage');
Route::get('/registerPage',[AuthController::class, 'registerPage'])->name('auth#registerPage');

Route::middleware([ 'auth:sanctum',config('jetstream.auth_session'), 'verified',])->group(function () {

//filter doctor? patient? admin?
Route::get('userFilter', [AuthController::class, 'UserFilter'])->name('user#filter');

//admin dashboard
Route::middleware(['admin_auth'])->group(function () {
Route::prefix('admin')->group(function () {
Route::get('dashboard', [AdminController::class, 'adminDashboard'])->name('admin#dashBoard');
Route::get('createDPage', [DoctorController::class, 'createPage'])->name('admin#dcreatePage');
Route::Post('create', [DoctorController::class,'create'])->name('admin#dCreate');
Route::get('userList', [AdminController::class,'userList'])->name('admin#userList');
});
});

//user doctor
Route::middleware(['user_doctor_auth'])->group(function () {
Route::prefix('doctor')->group(function () {
Route::get('dhome', [UserController::class, 'dhome'])->name('doctor#home');
Route::get('createSchedulePage', [UserController::class, 'createSchedulePage'])->name('doctor#createSchedulePage');
Route::post('createSchedule', [UserController::class, 'createSchedule'])->name('doctor#createSchedule');
Route::get('listSchedule', [ScheduleController::class, 'list'])->name('doctor#scheduleList');
Route::get('status/change',[AjaxController::class,'changeStatus'])->name('doctor#statusChange');
});
});

//user patient
Route::middleware(['user_patient_auth'])->group(function () {
Route::prefix('patient')->group(function () {
Route::get('phome', [UserController::class, 'phome'])->name('patient#home');
Route::get('bookingList',[AppointmentsController::class,'bookingList'])->name('pateint#bookingList');

//user create appointments
Route::get('createAppointPage', [AppointmentsController::class,'createAppointPage'])->name('patient#createAppointmentPage');
Route::get('special/doctors', [AjaxController::class,'doctorForSpecial'])->name('patient#doctor4specialization');
Route::get('special/doctors/section', [AjaxController::class,'sectionByDoctor'])->name('patient#sectionByDoctor');
Route::post('createAppointment', [AppointmentsController::class,'createAppointment'])->name('patient#createAppointment');
Route::get('viewSchedule', [ScheduleController::class,'viewSchedule'])->name('patient#viewSchedule');
});
});
});


