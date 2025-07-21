<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;   
use App\Http\Controllers\StudentController;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('users',[UserController::class, 'users'])->name('users');

Route::get('students', [StudentController::class, 'getStudents'])->name('students');

Route::get('employee', [EmployeeController::class, 'getEmployee'])->name('employee');