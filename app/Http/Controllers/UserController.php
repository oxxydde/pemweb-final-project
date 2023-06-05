<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\Factory;


class UserController extends Controller
{
    public function __invoke(Request $request)
    {
        $isUserLogined = $request->cookie('user') != null;
        if (!($isUserLogined)) {
            return view('user.login', [
                "result" => $request->cookie,
                "status" => session()->get('registerStatus')
            ]);
        }
        // Detour to admin dashboard instead if logined
        return redirect(route('admin.dashboard'));
    }

    public function login(Request $request)
    {
        $data = $request->all();
        $result = User::login([
            "username" => $data["username"],
            "password" => $data["password"]
        ])[0];

        if ($result != null) {
            if ($result->username == $data["username"] && $result->password == $data["password"]) {
                // Give Cookie and redirect to Admin Dashboard
                return redirect(route('admin.dashboard'))
                    ->cookie("user", $result->username, 120);
            }
        }
        // GANTI KODE DI BAWAH INI NANTI KALAU MISAL LOGINNYA SALAH
        return view('user.login', [
            "result" => "login failed, credential problem"
        ]);
    }

    public function logout()
    {
        return redirect('/')->cookie('user', null, -5);
    }

    public function invokeRegister()
    {
        return view('user.register');
    }

    public function register(Request $request)
    {
        $data = $request->all();

        $dataRegister = User::createAccount([
            "username" => $data["username"],
            "email" => $data["email"],
            "password" => $data["password"]
        ]);
        return redirect(route('login.login'))
            ->with(
                ['registerStatus' => ($dataRegister !== null) ? 1 : 0]
            );
    }
}
