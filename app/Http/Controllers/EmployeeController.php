<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
     function employeeLogin(Request $request) {

        $request->session()->put('empId', $request->empId);

        return session()->get('empId') ? redirect()->route('employeeProfile') : redirect()->route('employeeLogin');;

     }

     function employeeLogout() {
         session()->forget('empId');
         return redirect()->route('employeeLogin');
     }

     function addEmployee(Request $request) {
         
        $request>session()->flash('message', 'Employee added successfully!');
        
        return redirect()->route('addEmployee');

     }
}
