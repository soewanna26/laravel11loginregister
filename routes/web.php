<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/register',[AccountController::class,'register'])->name('register');
Route::post('/process-registration',[AccountController::class,'processRegistration'])->name('processRegistration');
Route::get('/login',[AccountController::class,'login'])->name('login');
Route::post('/authenticate',[AccountController::class,'authenticate'])->name('authenticate');
Route::get('/forgot-password',[AccountController::class,'forgotPassword'])->name('forgotPassword');
Route::post('/process-forgot-password',[AccountController::class,'processForgotPassword'])->name('processForgotPassword');
Route::get('/rest-password/{token}',[AccountController::class,'restPassword'])->name('restPassword');
Route::post('/process-reset-password',[AccountController::class,'processResetPassword'])->name('processResetPassword');
