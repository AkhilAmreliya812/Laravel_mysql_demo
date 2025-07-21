<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student; // Import the Student model

class StudentController extends Controller
{


    function getStudents() {

       //$data = new Student();

        $students = Student::all(); // Fetch all students from the database
        
        return view('students', ['students' => $students]);
    }
}
