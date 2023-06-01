<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AntriController extends Controller {
    public function __invoke() {
        return view('umum.tiket');
    }
}
