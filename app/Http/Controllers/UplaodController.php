<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UplaodController extends Controller
{
    function upload(Request $request) {

        $name = $request->input('name');
        $email = $request->input('email');
        $file = $request->file('file');
       
        $fileName = $name . "$" . date("Ymd") . uniqid() . '.' . $file->getClientOriginalExtension();

        // $directory = 'images/';

        // if (!file_exists(public_path($directory))) {
        //     mkdir(public_path($directory), 0755, true);
            // }

        $file->move(public_path('images'), $fileName);

        //   $path = $directory . $fileName;

        return "Image uploaded";

        // view('fileUpload', ['path' => $path, 'fileName' => $fileName]);

    }
}