<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Antri;
use Illuminate\Http\Request;

class AntriController extends Controller {
    public function __invoke() {
        return view('umum.tiket');
    }

    public function createTiketAntri(Request $request) {
        $data = $request->all();
        if ($data["keperluan"] === NULL) return;

        $tiketId = Antri::createAntri([
            "nik" => $data["nik"],
            "nama" => $data["nama"],
            "email" => $data["email"],
            "no-hp" => $data["no-hp"],
            "keperluan" => $data["keperluan"]
        ]);
        if ($tiketId !== NULL) {
            return view('umum.lihat-tiket-anda', [
                "idTiket" => $tiketId
            ]);
        }
    }
}
