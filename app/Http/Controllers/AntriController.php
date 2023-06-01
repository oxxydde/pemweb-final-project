<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AntriController extends Controller
{
    public static function invoke() {
        return view('umum.tiket');
    }
    public static function createAntri(Request $request) {

    }
}
