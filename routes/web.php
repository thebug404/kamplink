<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Mails\ContactController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\LinkController;
use Illuminate\Support\Facades\Auth;
use App\Models\Link;

Route::get('/', function () {
    return view('welcome');
})->middleware("guest");

Route::get(
    '/contact',
    [ContactController::class, "create"]
)->name("contact");

// ----------- Login ----------- //
Route::get(
    '/login',
    [LoginController::class, "create"]
)->name("auth.login.create");

Route::post(
    '/login',
    [LoginController::class, "store"]
)->name("auth.login.store");

Route::post(
    '/logout',
    [LoginController::class, "logout"]
)->name("auth.logout");

// ------------ Register ------------ //
Route::get(
    '/register',
    [RegisterController::class, "create"]
)->name("auth.register.create");

Route::post(
    '/register',
    [RegisterController::class, "store"]
)->name("auth.register.store");

// ------------ Profile ------------ //
Route::get('/dashboard', function () {
    $links = Link::where("user_id", Auth::user()->id)
    ->orderByDesc("created_at")
    ->limit(10)
    ->get();
    
    return view("profile.dashboard", compact("links"));
})
->middleware("auth")
->name("dashboard");

// ---------- Links --------- //
Route::resource(
    '/profile/links',
    LinkController::class
)->middleware("auth");
