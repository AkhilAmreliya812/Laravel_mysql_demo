<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Teachers extends Controller
{
    function getTeachers() {
        $result = DB::table('teacher')->get();

        // Check if the result is not empty
        if(!$result->isEmpty()) {
            return view('allTeachers', ['data' => $result]);
        } else {
            return "No data found";
        }
        
    }

    function getTeacherBuId() {
        
        $result = DB::table('teacher')->find(1);
        // Check if the result is null
        if(is_null($result)) {
            return "No data found";
        }
        return view('teacherById', ['data' => $result]);
    }

    function addTeachers() {
        // Insert multiple records into the teacher table
       
        $insert = DB::table('teacher')->insert(
            [
                [
                    "name" => "Khusboo Patel",
                    "subject" => "Mathematics",
                    "email" => "khusboopatel@gmail.com",
                ],
                [
                    "name" => "Shivani Patel",
                    "subject" => "Java",
                    "email" => "shivanipatel@gmail.com",
                ],
                [
                    "name" => "Dixita Bhimani",
                    "subject" => "Physics", 
                    "email" => "dixitabhimani@gmail.com"
                ],
                [
                    "name" => "Karan Patel",
                    "subject" => "Biology",
                    "email" => "karanpatel@gmail.com"
                ]
            ]
        );
        // If the insert was successful, return a success message
        if($insert) {
            return "Data inserted successfully";
        } else {
            return "Data not inserted";
        }

    }

    function updateTeacher() {
        // Check if the teacher with the given email exists
        $update = DB::table('teacher')->where('email','karanpatel@gmail.com')->update([
            "subject" => "Chemistry"
        ]);
        // If the update was successful, return a success message
        if($update) {
            return "Data updated successfully";
        } else {
            return "Data not updated";
        }
       
    }

    function deleteTeacher() {

        $delete = DB::table('teacher')->where('email','shivanipatel@gmail.com')->delete();
        // If the delete was successful, return a success message
        if($delete) {
            return "Data deleted successfully";
        } else {
            return "Data not deleted";
        }
    }

}
