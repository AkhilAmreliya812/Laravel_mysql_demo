<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function users() {
        return DB::select('SELECT * FROM users');
    }
}
