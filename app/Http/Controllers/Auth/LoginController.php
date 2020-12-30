<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller {
    public function __construct() {
        $this->middleware("guest")->only("create", "store");
    }

    public function create() {
        return view("auth.login");
    }

    public function store() {
        // Get credentials user.
        $credentials = request()->only("email", "password");

        if (Auth::attempt($credentials)) {
            request()->session()->regenerate();

            return redirect()->intended("dashboard");
        }

        return back()->withErrors([
            "email" => "Las credenciales son invalidas."
        ])->withInput([
            "email" => $credentials["email"]
        ]);
    }

    public function logout() {
        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect()->route("auth.login.create");
    }
}
