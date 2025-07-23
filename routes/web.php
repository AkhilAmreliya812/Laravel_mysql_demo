<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;   
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Teachers;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('users',[UserController::class, 'users'])->name('users');

Route::get('students', [StudentController::class, 'getStudents'])->name('students');

Route::get('employee', [EmployeeController::class, 'getEmployee'])->name('employee');

Route::get('addTeachers', [Teachers::class, 'addTeachers'])->name('addTeachers');

Route::get('updateTeacher', [Teachers::class, 'updateTeacher'])->name('updateTeacher');

Route::get('deleteTeacher', [Teachers::class, 'deleteTeacher'])->name('deleteTeacher');

Route::get('getTeachers', [Teachers::class, 'getTeachers'])->name('getTeachers');

Route::get('getTeacherById', [Teachers::class, 'getTeacherBuId'])->name('getTeacherById');

Route::view('employeeLogin', 'employeeLoginForm')->name('employeeLogin');

Route::post('employeeLogin', [EmployeeController::class, 'employeeLogin'])->name('employeeLogin.post');

Route::view('employeeProfile', 'employeeProfile')->name('employeeProfile');

Route::get('employeeLogout', [EmployeeController::class, 'employeeLogout'])->name('employeeLogout');


