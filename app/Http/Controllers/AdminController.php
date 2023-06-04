<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Antri;
use Illuminate\Http\Request;

class AdminController extends Controller {
    public function __invoke(Request $request) {
        if (AdminController::validation($request)) {
            $data = Antri::getAntris();
            return view('sistem.antri', [
                "data" => $data["data"],
                "keperluan" => $data["keperluan"],
                "status" => $data["status"]
            ]);
        }
        return redirect(route('login.login'));
    }

    public static function validation(Request $request) {
        return $request->cookie('user') != null;
    }
    public static function update($id, $newStatus) {
        Antri::updateStatusById($id, $newStatus);
        return redirect(route('admin.dashboard'));
    }
    
    public function resetAntri() {
        Antri::resetAntri();
        return redirect(route('admin.dashboard'));
    }
}
