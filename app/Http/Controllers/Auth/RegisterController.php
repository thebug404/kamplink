<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller {
    public function __construct() {
        $this->middleware("guest")->only("create", "store");
    }

    public function create() {
        return view("auth.register");
    }

    public function store() {
        // Validate fields user.
        $data = request()->validate([
            "name" => "required|string|min:5",
            "email" => "required|string|email",
            "password" => "required|string|min:8"
        ]);

        // Encrypt password
        $data["password"] = Hash::make($data["password"]);

        // Save user in the database.
        $user = User::create($data);

        // Auth new user
        Auth::login($user);

        // Dispath event registered.
        event(new Registered($user));

        return redirect(RouteServiceProvider::HOME);
    }
}
