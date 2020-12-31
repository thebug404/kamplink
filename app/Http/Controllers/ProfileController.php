<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Link;

class ProfileController extends Controller {
    public function dashboard() {
        $links = Link::where("user_id", Auth::user()->id)
        ->orderByDesc("created_at")
        ->limit(10)
        ->get();
        
        return view("profile.dashboard", compact("links"));
    }
}
