<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Mails\ContactController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\LinkController;

Route::get(
    '/',
    [HomeController::class, "index"]
)->middleware("guest");

Route::get(
    '/contact',
    [ContactController::class, "create"]
)->name("contact");

Route::post(
    '/contact',
    [ContactController::class, "store"]
)->name("contact.store");

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
Route::get(
    '/dashboard',
    [ProfileController::class, "dashboard"]
)
->middleware("auth")
->name("dashboard");

// ---------- Links --------- //
Route::resource(
    '/profile/links',
    LinkController::class
)->middleware("auth");
