<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller {
    public function __invoke() {
        return view('sistem.antri', [
            "data" => []
        ]);
    }
}
