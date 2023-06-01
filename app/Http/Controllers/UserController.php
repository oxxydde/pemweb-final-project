<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller {
    public function __invoke() {
        return view('user.login');
    }
    
    public static function login(Request $request) {
        $data = $request->all();
        $username = $data["username"];
        $password = $data["password"];
    }
    
    public static function register(Request $request) {
    }
}
