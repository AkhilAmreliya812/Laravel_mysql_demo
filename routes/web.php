<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;   
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Teachers;

Route::get('/', function () {
    return view('welcome');
});

Route::get('users',[UserController::class, 'users'])->name('users');

Route::get('students', [StudentController::class, 'getStudents'])->name('students');

Route::get('addTeachers', [Teachers::class, 'addTeachers'])->name('addTeachers');

Route::get('updateTeacher', [Teachers::class, 'updateTeacher'])->name('updateTeacher');

Route::get('deleteTeacher', [Teachers::class, 'deleteTeacher'])->name('deleteTeacher');

Route::get('getTeachers', [Teachers::class, 'getTeachers'])->name('getTeachers');

Route::get('getTeacherById', [Teachers::class, 'getTeacherBuId'])->name('getTeacherById');

