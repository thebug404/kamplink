<?php

namespace App\Http\Controllers\Mails;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller {
    public function create() {
        return view("mails.contactme");
    }

    public function store() {}
}
