<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

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



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'redirect'])->middleware('auth', 'verified');
Route::post('/appointment', [HomeController::class, 'appointment']);
Route::get('/myappointment', [HomeController::class, 'myappointment']);
Route::get('/cancel_appointment/{id}', [HomeController::class, 'cancel_appointment']);





Route::get('/add_doctors_view', [AdminController::class, 'add_doctor_view']);
Route::post('/upload_doctor_data', [AdminController::class, 'upload_doctor_data']);
Route::get('/showappointment', [AdminController::class, 'showappointment']);
Route::get('/approved_appointment/{id}', [AdminController::class, 'approved_appointment']);
Route::get('/showdoctors', [AdminController::class, 'showdoctors']);
Route::get('/delete_doctor/{id}', [AdminController::class, 'delete_doctor']);
Route::get('/update_doctor/{id}', [AdminController::class, 'update_doctor']);
Route::post('/edit_doctor/{id}', [AdminController::class, 'edit_doctor']);
Route::get('/appointment_email/{id}', [AdminController::class, 'appointment_email']);
Route::post('/appointment_email_send/{id}', [AdminController::class, 'appointment_email_send']);
