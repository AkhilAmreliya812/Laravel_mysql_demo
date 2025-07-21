<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; // Import the Http facade

class EmployeeController extends Controller
{
    function getEmployee() {

        // $response = Http::get('https://dummyjson.com/users'); // Fetch data from the API
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://dummyjson.com/users");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);
        curl_close($ch);
        if (!empty($response)) {
            $response = json_decode($response, true); // Decode the JSON response into an associative array
            return view('employee', ['data' => $response]); // Pass the JSON response to the view
        }
    }
}
