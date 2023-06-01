<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public static function loginInvoke() {
        return view('user.login');
    }
    
    public static function login(Request $request) {
    }
    
    public static function register(Request $request) {
    }
}
